<?php 

use Ikonc\Http\Route;
use App\Controllers\HomeController;
use App\Controllers\Auth\RegisterController;


Route::get('/', [HomeController::class,'index']);

//register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);