<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastrar(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'senha' => 'required|string|min:6|confirmed', // 'confirmed' valida se 'senha' e 'senha_confirmation' são iguais
        ]);
    
        // Criar o usuário, criptografando a senha diretamente aqui
        $user = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha), // Criptografando a senha diretamente no controlador
        ]);
    
        // Gerar o token de autenticação
        $token = $user->createToken('PersonalAccessToken')->plainTextToken;
    
        // Retornar os dados do usuário e o token
        return response()->json([
            'usuario' => $user,
            'token' => $token,
        ], 201);
    }

    public function login(Request $request)
    {
        // Validação de login
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->senha, $user->senha)) {
            return response()->json(['message' => 'Credenciais inválidas.'], 401);
        }

        // Gerar o token de autenticação
        $token = $user->createToken('Token de Acesso')->plainTextToken;

        // Salvar o token no usuário
        $user->token = $token;
        $user->save();

        return response()->json([
            'token' => $token,
            'message' => 'Usuário autenticado com sucesso!',
        ]);
    }

    public function logout(Request $request)
    {
        // Deletar todos os tokens do usuário
        $request->user()->tokens->each(function ($token) {
            $token->delete();
        });

        // Atualizar o campo de token do usuário
        $request->user()->update(['token' => null]);

        return response()->json(['message' => 'Logout bem-sucedido']);
    }
    
    public function protectedResource(Request $request)
    {
        return response()->json(['message' => 'Esta é uma rota protegida', 'user' => $request->user()]);
    }
}
