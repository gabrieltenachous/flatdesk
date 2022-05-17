<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function index(){
        $session = Session::all();
        // $creds = $request->only(['email','password']);  
        // $token = auth()->attempt($creds); 
        return view('task')->with('token');
    }
}
