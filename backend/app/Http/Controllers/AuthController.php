<?php

namespace App\Http\Controllers;

use App\Models\chef_departement;
use App\Models\chef_departements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'name_department' => 'required',
            'password' => 'required|confirmed',
            'role' => 'required',
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'name_department' => $data['name_department'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type'   => 'Bearer',
        ], 201);
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'name_department' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $credentials['email'])->first();
        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages(['email' => ['Invalid credentials.']]);
        };
        if ($user->name_department !== $credentials['name_department']) {
            throw ValidationException::withMessages(['name_department' => ['Invalid credentials.']]);
        }
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type'   => 'Bearer',
            'user'         => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'name_department' => $user->name_department,
                'photo_profil' => $user->photo_profil,
                'status' => $user->status,
                'role' => $user->role,
            ],

        ]);

    }

    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Vous êtes déconnecté.',
        ]);

    }

    public function user(Request $request) {
        return $request->user();
    }
}
