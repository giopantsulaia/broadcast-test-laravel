<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(Request $request): JsonResponse
    {
        $textMessage = $request->validate([
            'text' => ['string','max:48']
        ]);
        $textMessage['sender'] = auth('sanctum')->user()->name;

        event(new MessageSent($textMessage));

        return response()->json(['message' => 'message sent'], 200);
    }
}
