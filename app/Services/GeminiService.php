<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    private ?string $apiKey = null;

    private string $model;

    private string $baseUrl;

    private const SYSTEM_PROMPT = <<<'PROMPT'
Eres "Gestionalo Asistente", un consultor virtual especializado en arquitectura legal, regularización de licencias de funcionamiento, Inspección Técnica de Seguridad en Edificaciones (ITSE), saneamiento predial, habilitación y mantenimiento comercial en Perú.

Tu rol es asesorar a clientes sobre:
- Licencias de funcionamiento municipal (tipos, requisitos, procesos)
- ITSE (Inspección Técnica de Seguridad en Edificaciones): modalidades, evaluación, preparación
- Saneamiento inmobiliario y regularización ante SUNARP (declaratoria de fábrica, independización, prescripción adquisitiva)
- Adecuación y mantenimiento de locales comerciales
- Normativa de Defensa Civil y cumplimiento de seguridad
- Servicios que ofrece Gestionalo: diagnósticos técnicos, gestión de expedientes, auditorías preventivas

Reglas:
- Responde SIEMPRE en español.
- Sé conciso, profesional y útil. Respuestas de máximo 3-4 párrafos.
- Si la consulta no es de tu ámbito, indica amablemente que solo puedes asesorar en temas de arquitectura legal y seguridad.
- Si necesitas más información para dar una respuesta completa, pregunta al usuario.
- Nunca inventes información normativa. Si no conoces un dato específico, indica que debe verificarse con la municipalidad correspondiente.
PROMPT;

    public function __construct()
    {
        $this->apiKey = config('ai.gemini.api_key');
        $this->model = config('ai.gemini.model');
        $this->baseUrl = config('ai.gemini.base_url');
    }

    public function chat(string $message, array $history = []): string
    {
        $contents = [];

        foreach ($history as $msg) {
            $contents[] = [
                'role' => $msg['role'] === 'user' ? 'user' : 'model',
                'parts' => [['text' => $msg['content']]],
            ];
        }

        $contents[] = [
            'role' => 'user',
            'parts' => [['text' => $message]],
        ];

        if (empty($this->apiKey)) {
            throw new \RuntimeException('GEMINI_API_KEY no está configurada.');
        }

        $url = "{$this->baseUrl}/models/{$this->model}:generateContent?key={$this->apiKey}";

        try {
            $response = Http::timeout(30)
                ->withoutVerifying()
                ->post($url, [
                    'contents' => $contents,
                    'systemInstruction' => [
                        'parts' => [['text' => self::SYSTEM_PROMPT]],
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
                throw new \RuntimeException("Gemini bloqueó la solicitud: {$blockReason}");
            }

            return trim($text);
        } catch (\Throwable $e) {
            throw new \RuntimeException("Gemini API error: {$e->getMessage()}");
        }
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

        $response = $this->stripCodeBlock($this->generate($prompt));

        $decoded = json_decode($response, true);

        if (is_array($decoded)) {
            return $decoded;
        }

        $lines = array_filter(explode("\n", $response), fn ($l) => trim($l) !== '');
        $lines = array_values($lines);

        if (count($lines) > 1) {
            return $lines;
        }

        return [$response];
    }

    private function stripCodeBlock(string $text): string
    {
        $text = trim($text);
        $text = preg_replace('/^```(?:json)?\s*/i', '', $text);
        $text = preg_replace('/\s*```$/i', '', $text);

        return trim($text);
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
