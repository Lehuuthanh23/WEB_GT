<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\ChatHistory;

class ChatController extends Controller
{
    public function chatAI(Request $request)
    {
        \Log::info("Vào chatAI");
        \Log::info($request->all());

        $apiKey = env('GEMINI_API_KEY');
        $client = new Client();

        // 🔹 Lấy 5 tin nhắn gần nhất theo thứ tự đúng (từ cũ đến mới)
        $history = ChatHistory::orderBy('created_at', 'asc')->take(10)->get();

        // 🔹 Tạo danh sách hội thoại có role user/model
        $conversation = [];

        foreach ($history as $chat) {
            $conversation[] = ['role' => 'user', 'parts' => [['text' => $chat->user_message]]];
            $conversation[] = ['role' => 'model', 'parts' => [['text' => $chat->ai_response]]];
        }

        // 🔹 Thêm câu hỏi hiện tại của user vào danh sách
        $conversation[] = ['role' => 'user', 'parts' => [['text' => $request->input('message')]]];

        try {
            // 🔹 Gửi request đến Gemini API với định dạng đúng
            $response = $client->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=$apiKey", [
                'headers' => ['Content-Type' => 'application/json'],
                'json' => ['contents' => $conversation],
            ]);

            $data = json_decode($response->getBody(), true);
            $aiResponse = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Không có phản hồi từ AI.';
        } catch (\Exception $e) {
            \Log::error("Lỗi gọi API Gemini: " . $e->getMessage());
            $aiResponse = 'Xin lỗi, hiện tại tôi không thể phản hồi. Vui lòng thử lại sau.';
        }

        // 🔹 Lưu vào database
        ChatHistory::create([
            'user_message' => $request->input('message'),
            'ai_response' => $aiResponse
        ]);

        return response()->json(['message' => $aiResponse]);
    }
}
