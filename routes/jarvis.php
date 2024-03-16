<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/intro', function () {
//     return "<h1>Hello, I am J.A.R.V.I.S</h1>";
// });

// Route::post('/tony', function () {
//     return "<h1>Good Day, Mr. Stark.</h1>";
// });

Route::match(['get', 'post', 'patch', 'put'], '/match' , function () {
    return "I can match you.";
});

// Route::any('/any', function () {
//     return "I can match anything";
// });

// Route::get('/users', function (Request $request) {
//     return $request->name . ' - ' . $request->email;
// });