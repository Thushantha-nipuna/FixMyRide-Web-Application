<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    public function sendMessage(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'message' => 'required|string|max:1000',
            ]);

            $userMessage = $request->input('message');
            $isAuthenticated = auth()->check();
            $userName = $isAuthenticated ? auth()->user()->name : 'Guest';
            $userRole = $isAuthenticated ? auth()->user()->role : 'guest';

            // Get Groq API key
            $apiKey = env('GROQ_API_KEY');

            if (!$apiKey) {
                return response()->json([
                    'success' => false,
                    'message' => 'API key not configured.'
                ], 500);
            }

            // Build system prompt
            $systemPrompt = $this->buildSystemPrompt($userRole, $userName, $isAuthenticated);

            // Call Groq API
            $response = Http::withOptions(['verify' => false])
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ])
                ->timeout(30)
                ->post('https://api.groq.com/openai/v1/chat/completions', [
                    'model' => 'llama-3.1-8b-instant', // Fast and free model
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => $systemPrompt
                        ],
                        [
                            'role' => 'user',
                            'content' => $userMessage
                        ]
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 500,
                ]);

            if ($response->successful()) {
                $data = $response->json();

                if (isset($data['choices'][0]['message']['content'])) {
                    $aiResponse = $data['choices'][0]['message']['content'];

                    return response()->json([
                        'success' => true,
                        'message' => trim($aiResponse)
                    ]);
                }
            }

            // Log error for debugging
            Log::error('Groq API Error', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'AI service temporarily unavailable. Please try again.'
            ], 500);

        } catch (\Exception $e) {
            Log::error('Chatbot Exception: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }

    private function buildSystemPrompt($userRole, $userName, $isAuthenticated)
    {
        $basePrompt = "You are FixMyRide AI Assistant, a helpful chatbot for FixMyRide - a platform connecting vehicle owners, mechanics, and spare parts sellers.

Platform Features:
- Find nearby mechanics on a map
- Book mechanic services
- Browse spare parts
- Rate and review services

Keep responses short (2-4 sentences), friendly, and helpful.

";

        if ($isAuthenticated) {
            $roleInfo = match($userRole) {
                'customer' => "Current user: {$userName} (Vehicle Owner). Help them find mechanics and parts.",
                'mechanic' => "Current user: {$userName} (Mechanic). Help them manage their profile and attract customers.",
                'seller' => "Current user: {$userName} (Parts Seller). Help them manage inventory and sales.",
                default => "Current user: {$userName}. Provide general help."
            };
            $basePrompt .= $roleInfo;
        } else {
            $basePrompt .= "Current user: Guest. Encourage them to register for full features.";
        }

        return $basePrompt;
    }
}