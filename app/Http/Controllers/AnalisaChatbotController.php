<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalisaChatbotController extends Controller
{
    public function index()
    {
        return view('pages/chatbot/analisa-chatbot');
    }
    public function chat(Request $request)
{
    // Retrieve the conversation history from the request
    $messages = $request->input('messages');

    // Retrieve your OpenAI API key from the environment variables
    $apiKey = env('OPENAI_API_KEY');

    // Prepare the conversation payload
    $payload = [
        'messages' => $messages,
        'max_tokens' => 100,
        'temperature' => 0.7,
        'stop' => ['\n'],
    ];

    // Send the request to the OpenAI API
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $apiKey,
        'Content-Type' => 'application/json',
    ])->post('https://api.openai.com/v1/engines/davinci/completions', $payload);

    // Check if the API request was successful
    if ($response->successful()) {
        // Extract the bot response from the server response
        $botResponse = $response->json('choices.0.message.content');

        return response()->json([
            'message' => $botResponse,
        ]);
    } else {
        // Handle the error case
        $errorMessage = $response->json('error.message');

        return response()->json([
            'error' => $errorMessage,
        ], 500);
    }
}


}