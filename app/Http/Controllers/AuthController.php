<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $validated['email'])->firstOrFail();

        if (!Auth::attempt($validated)) {
            return response()->json(['message' => 'Incorrect credentials.'], 401);
        }

        return response()->json(['token' => $user->createToken('api_token')->plainTextToken]);
    }

    public function logout(): JsonResponse
    {
        auth('sanctum')->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out'], 200);
    }
}
