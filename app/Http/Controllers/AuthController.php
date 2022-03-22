<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function register(Request $request)
    {
        /**
         * validando os dados
         */
         $fields = $request->validate([
             'first_name' => 'required|string',
             'last_name' => 'string',
             'email' => 'required|string|unique:users,email',
             'password' => 'required|string|confirmed',
         ]);
 
         /**
          * criando user
          */
         $user = User::create([
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
         ]);

         /**
          * criando token
          */
         $token = $user->createToken('@?/TokenAcessSiteNutrinistra/?@')->plainTextToken;

         $response = [
             'user' => $user,
             'token' => $token
         ];

         return response($response, 201);
     }

     public function login(Request $request)
     {
          /**
         * validando os dados
         */
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        /**
         * buscando user
         */
        $user = User::where('email', $fields['email'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)){
            return response([
                'message' => 'E-mail ou Senha inválidos.'
            ], 401);
        }

        $token = $user->createToken('@?/UsuarioLogadoNoSiteNutrinistra/?@')->plainTextToken;

        $response = [
           # 'user' => $user,
            'token' => $token
        ];

        return response([
            'message' => 'Logado com sucesso.',
            $response
        ], 201);
     }

     public function logout(Request $request)
     {
        auth()->user()->tokens()->delete();

        return response([
            'message' => 'Deslogado com sucesso.'
        ], 200);
     }
}
