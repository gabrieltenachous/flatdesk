<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\TaskController;
use App\Http\Controllers\Web\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AuthController::class,'login']);    
Route::get('/tarefas',[TaskController::class,'index']);   
Route::get('/cadastrar',[AuthController::class,'register']);    