<?php

namespace App\Services;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class GeminiService
{
    private ?string $apiKey = null;
    private string $model;
    private string $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('ai.gemini.api_key');
        $this->model = config('ai.gemini.model');
        $this->baseUrl = config('ai.gemini.base_url');
    }

    public function generateSummary(string $text): string
    {
        $prompt = <<<PROMPT
Eres un asistente que resume artículos en español.

Artículo:
{$text}

Genera un resumen conciso del artículo en español, de 2-3 párrafos. Enfócate en las ideas principales.
PROMPT;

        return $this->generate($prompt);
    }

    public function generateHighlights(string $text): array
    {
        $prompt = <<<PROMPT
Eres un asistente que extrae puntos clave de artículos en español.

Artículo:
{$text}

Extrae entre 5 y 8 puntos clave del artículo. Devuelve SOLO un array JSON con los puntos, cada punto como un string. Ejemplo:
["Punto clave 1", "Punto clave 2"]
PROMPT;

        $response = $this->generate($prompt);

        $decoded = json_decode($response, true);

        if (is_array($decoded)) {
            return $decoded;
        }

        $lines = array_filter(explode("\n", $response), fn($l) => trim($l) !== '');
        $lines = array_values($lines);

        if (count($lines) > 1) {
            return $lines;
        }

        return [$response];
    }

    private function generate(string $prompt): string
    {
        if (empty($this->apiKey)) {
            throw new \RuntimeException('GEMINI_API_KEY no está configurada.');
        }

        $url = "{$this->baseUrl}/models/{$this->model}:generateContent?key={$this->apiKey}";

        try {
            $response = Http::timeout(30)
                ->withoutVerifying()
                ->post($url, [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt],
                            ],
                        ],
                    ],
                    'generationConfig' => [
                        'temperature' => 0.7,
                        'maxOutputTokens' => 1024,
                    ],
                ]);

            $response->throw();

            $data = $response->json();

            $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? '';

            if (empty($text)) {
                $blockReason = $data['promptFeedback']['blockReason'] ?? 'unknown';
                throw new \RuntimeException("Gemini blocked the request: {$blockReason}");
            }

            return trim($text);
        } catch (\Throwable $e) {
            throw new \RuntimeException("Gemini API error: {$e->getMessage()}");
        }
    }
}
