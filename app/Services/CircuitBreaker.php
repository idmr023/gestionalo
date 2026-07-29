<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CircuitBreaker
{
    private string $service;

    private int $threshold;

    private int $timeout;

    private const string PREFIX = 'circuit_breaker_';

    public function __construct(string $service, int $threshold = 3, int $timeout = 60)
    {
        $this->service = $service;
        $this->threshold = $threshold;
        $this->timeout = $timeout;
    }

    public function isOpen(): bool
    {
        return Cache::get($this->failureKey()) >= $this->threshold
            && Cache::get($this->openedAtKey()) > now()->subSeconds($this->timeout)->timestamp;
    }

    public function isHalfOpen(): bool
    {
        return Cache::get($this->failureKey()) >= $this->threshold
            && Cache::get($this->openedAtKey()) <= now()->subSeconds($this->timeout)->timestamp;
    }

    public function recordFailure(): void
    {
        $failures = (int) Cache::get($this->failureKey(), 0) + 1;
        Cache::put($this->failureKey(), $failures, $this->timeout);

        if ($failures >= $this->threshold) {
            Cache::put($this->openedAtKey(), now()->timestamp, $this->timeout);
            Log::warning("Circuit breaker [{$this->service}] opened after {$failures} failures.");
        }
    }

    public function recordSuccess(): void
    {
        Cache::forget($this->failureKey());
        Cache::forget($this->openedAtKey());
    }

    public function call(callable $fn): mixed
    {
        if ($this->isOpen()) {
            throw new \RuntimeException("Circuit breaker [{$this->service}] is open. Request blocked.");
        }

        try {
            $result = $fn();
            $this->recordSuccess();

            return $result;
        } catch (\Throwable $e) {
            $this->recordFailure();
            throw $e;
        }
    }

    private function failureKey(): string
    {
        return self::PREFIX.$this->service.'_failures';
    }

    private function openedAtKey(): string
    {
        return self::PREFIX.$this->service.'_opened_at';
    }
}
