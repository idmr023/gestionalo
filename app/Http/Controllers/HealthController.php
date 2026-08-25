<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $checks = [
            'database' => $this->checkDatabase(),
            'cache' => $this->checkCache(),
            'app' => [
                'status' => 'ok',
                'environment' => app()->environment(),
                'debug' => config('app.debug'),
            ],
        ];

        $allOk = collect($checks)->every(fn ($c) => ($c['status'] ?? null) === 'ok');

        return response()->json([
            'status' => $allOk ? 'ok' : 'degraded',
            'timestamp' => now()->toIso8601String(),
            'checks' => $checks,
        ], $allOk ? 200 : 503);
    }

    private function checkDatabase(): array
    {
        try {
            DB::select('SELECT 1');

            return ['status' => 'ok', 'latency_ms' => round($this->measureLatency(fn () => DB::select('SELECT 1')), 1)];
        } catch (\Throwable $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    private function checkCache(): array
    {
        try {
            Cache::store()->set('health_check', true, 1);

            return ['status' => 'ok'];
        } catch (\Throwable $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    private function measureLatency(callable $fn): float
    {
        $start = microtime(true);
        $fn();

        return (microtime(true) - $start) * 1000;
    }
}
