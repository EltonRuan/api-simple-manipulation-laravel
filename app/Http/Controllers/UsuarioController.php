<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastrar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'senha' => 'required|string|min:6|confirmed',
        ]);
    
        $user = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);
    
        $token = $user->createToken('PersonalAccessToken')->plainTextToken;
    
        return response()->json([
            'usuario' => $user,
            'token' => $token,
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->senha, $user->senha)) {
            return response()->json(['message' => 'Credenciais inválidas.'], 401);
        }

        $token = $user->createToken('Token de Acesso')->plainTextToken;

        $user->token = $token;
        $user->save();

        return response()->json([
            'token' => $token,
            'message' => 'Usuário autenticado com sucesso!',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens->each(function ($token) {
            $token->delete();
        });

        $request->user()->update(['token' => null]);

        return response()->json(['message' => 'Logout bem-sucedido']);
    }
    
    public function protectedResource(Request $request)
    {
        return response()->json(['message' => 'Esta é uma rota protegida', 'user' => $request->user()]);
    }
}
