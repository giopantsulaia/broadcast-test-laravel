<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Events\UserGreeted;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InteractionController extends Controller
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

    public function greet(User $user): JsonResponse
    {
        $greetings = (object)[
            'to' => $user->id,
            'from' => auth('sanctum')->user()->name
        ];

        event(new UserGreeted($greetings));

        return response()->json(['message' => 'success'], 200);
    }
}
