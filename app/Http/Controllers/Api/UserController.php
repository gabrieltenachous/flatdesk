<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginUserRequest;
use App\Http\Requests\User\StoreUserController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller
{
    public function store(StoreUserController $request){ 
        $user = new User();
        $user->email = $request->email; 
        $user->password = Hash::make($request->password);
        $user->name = $request->name; 
        $user->save(); 
        return response()->json([
            'data' => $user,
            'message' => 'Usuario cadastrado com sucesso',
        ], 201);
    }

    public function logout()
    {   
        if(auth()->user() == null){
            return response()->json(
                [ 
                    'data' =>'',
                    'message' => 'Usuario já está deslogado ou token inexistente',
                ]
            );
        }
        auth()->logout();  
        return response()->json(
            [ 
                'data' =>'',
                'message' => 'Usuario deslogado com sucesso',
            ]
        );
    }

    public function login(LoginUserRequest $request){  
        $creds = $request->only(['email','password']);  
        $token = auth()->attempt($creds); 
        if(!$token){
            return response()->json([ 
                'data' =>'',
                'message' => 'Senha ou email invalido',
            ], 401);
        }
        $user = User::where('email',$request->email)->first();   
        return response()->json([
            'data' => [
                'token' => $token,
                'user'  => $user,
            ],
            'message' => 'Usuario logado com sucesso',
        ], 201);
    } 
}
