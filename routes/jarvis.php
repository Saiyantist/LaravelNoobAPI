<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\UserController;
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


Route::get('/intro', function () {
    return "<h1>Hello, I am J.A.R.V.I.S</h1>";
});

Route::post('/tony', function () {
    return "<h1>Good Day, Mr. Stark.</h1>";
});

/**
 * Activity 1 & 2
 */
Route::middleware('check.token')->group(function () {

    Route::controller(SimpleController::class)->prefix('simple')->group(function (){
        Route::get('/users', 'index');
        Route::post('/users', 'store');
        Route::put('/users/{id}', 'edit');
        Route::patch('/users/{id}', 'update');
        Route::delete('/users/{id}', 'destroy');
    });

    /**
     * Activity 3
     */

    // Route::controller(ProductController::class)->prefix('products')->group(function () {
    //     Route::get('/', 'index');
    //     Route::get('/{id}', 'show');
    //     Route::patch('/{id}', 'update');
    //     Route::delete('/{id}', 'destroy');
    //     Route::post('/create', 'store');
    // });

    /**
     * Missed Step 😅 sayangg
     */
    Route::apiResource('products', ProductController::class);
});


Route::match(['get', 'post', 'patch', 'put', 'delete'], '/match' , function () {
    return "I can match get, post, patch, put, and delete..";
});

// Route::any('/any', function () {
//     return "I can match anything";
// });

// Route::get('/users', function (Request $request) {
//     return $request->name . ' - ' . $request->email;
// });


