<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

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

Route::view('/', 'welcome');

Route::get('/bawal', function () {
    $users = User::all();
    return compact ('users');
});

Route::get('/greetings', function (Request $request){
    $user = $request->user()->name;
    return "<h1>Hello {$user} </h1>";
});

Route::get('/controller', [UserController::class, 'index']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



Route::get('/lab2', [SchoolController::class, 'index']);

require __DIR__.'/auth.php';
