<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        // En caso de fallar la autenticación
        if(!Auth::attempt($credentials)){
            return response([
                "message" => "Usuario y/o contraseña invalido."
            ], 401);
        }

        // En caso de contar con las credenciales correctas le otorgamos un accessToken
        $accessToken = Auth::user()->createToken('authTestToken')->accessToken;

        // Retornar los datos del usuario junto a su accessToken
        return response([
            "user" => Auth::user(),
            "access_token" => $accessToken
        ]);
    }
}