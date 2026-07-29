<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CalendlyService
{
    private CircuitBreaker $breaker;

    public function __construct()
    {
        $this->breaker = new CircuitBreaker('calendly', threshold: 3, timeout: 60);
    }

    public function getEventTypes(): array
    {
        return $this->breaker->call(function () {
            $uri = config('services.calendly.api_url', 'https://api.calendly.com');

            $response = Http::timeout(5)
                ->withHeaders([
                    'Authorization' => 'Bearer '.config('services.calendly.token'),
                    'Content-Type' => 'application/json',
                ])
                ->get("{$uri}/event_types");

            if (! $response->successful()) {
                Log::warning('Calendly API error', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                throw new \RuntimeException("Calendly API returned status {$response->status()}");
            }

            return $response->json();
        });
    }
}
