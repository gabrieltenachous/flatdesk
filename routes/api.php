<?php

use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/user/register',[UserController::class,'store']); 
Route::post('/user/login',[UserController::class,'login']);  
Route::get('/user/logout',[UserController::class,'logout']); 
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('/task',[TaskController::class,'index']); 
    Route::post('/task',[TaskController::class,'store']); 
    Route::post('/task/{id}',[TaskController::class,'update']); 
    Route::get('/task/{id}',[TaskController::class,'show']); 
    Route::delete('/task/{id}',[TaskController::class,'destroy']); 
}); 