<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/code', function () {
//     return view('code');
// });
// Route::get('/verfiy', function () {
//     return view('verfiy');
// });
// Route::get('/check', function () {
//     return view('checkcode');
// });
Route::get('/',[UserController::class,'registerForm']);
Route::post('/register',[UserController::class,'register'])->name('register');
Route::get('/verfiy',[UserController::class,'verifyForm'])->name('verfiy')->middleware('auth:sanctum');
Route::post('/verify/code',[UserController::class,'verifyCode'])->name('verifyCode');