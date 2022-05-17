<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    public function login(){ 
        return view('login');
    }
    public function register(Request $request){
        $creds = $request->only(['email','password']);  
        $token = auth()->attempt($creds);
        return view('register')->with('token');
    }
     
}
