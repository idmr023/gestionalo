<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\GeminiService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function __invoke(Request $request, Post $post, string $type): JsonResponse
    {
        if (! in_array($type, ['summary', 'highlights'], true)) {
            return response()->json(['error' => 'Tipo inválido.'], 422);
        }

        if (empty($post->body)) {
            return response()->json(['error' => 'El artículo no tiene contenido.'], 422);
        }

        try {
            $gemini = app(GeminiService::class);

            if ($type === 'summary') {
                $result = $gemini->generateSummary($post->body);

                return response()->json(['summary' => $result]);
            }

            $result = $gemini->generateHighlights($post->body);

            return response()->json(['highlights' => $result]);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
