<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Controller
Route::controller(FrontendController::class)->group(function(){
    Route::get('/','index');
    Route::get('page/{id}','page');
});

// Backend Controller
Route::controller(BackendController::class)->group(function(){
    Route::get('/login','login');
    Route::get('/register','register');
    Route::get('page/{id}','page');
    
    
});