<?php

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

Route::get('/greetings', function () {
    return "<h1>Hello, I am an API</h1>";
});

Route::get('/welcome', function (Request $request) {
    $fname = $request->fname;
    $lname = $request->lname;

    return 'Pst ' . $fname . ' ' . $lname;
});


// Route Paramaters

/**
 * 1. Required Parameters
 * 
 * 
 * Capture User's ID from the url:
*/
// Route::get('/user/{id}', function (string $id) {
//     return 'User ' . $id;
// });

/** 
 * Many route parameters:
*/
Route::get('/posts/{post}/comments/{komento}', function (string $postId, string $komentoId) {
    return 'post id: ' . $postId . '<br>komento id: ' . $komentoId; 
});


/**
 * - Parameters and Dependency Injection
 * 
 * List DEPENDENCY INJECTION 1st before Route Parameters 
 *                                        
 *                                 Dep Inj   |     Params  |
 *                                           V             V
 */
Route::get('/user/id/{id}', function (Request $request, string $id) {
    return 'User id: ' . $id;
});


/**
 * 2. Optional Parameters
 * 
 * not always present in url, then use `?` after param name
 * make sure to set a default value
 */
Route::get('/user/name/{name?}', function (?string $name = 'Unnamed') {
    return 'Username: ' . $name;
});


/**
 * 3. Regular Expression Constraints
 * 
 * Constraining the format of route paramaters using `where`
 * there are some built-in helper methods for `where`:
 * https://laravel.com/docs/10.x/routing#parameters-regular-expression-constraints
 */
// Route::get('/user/{name}', function (string $name) {
//     return $name;
// })->where('name', '[A-Za-z]+');


/**
 * - Global Constraints
 * define the Route::patern(); here sa boot(): void
 * in: `App\Providers\RouteServiceProvider`
 */




/**
 * Named Routes
 * add at end `->name('RouteName');`
 * ALWAYS UNIQUE
 * 
 * 
 * 1. Generating URLs to Named Routes
 * 
 * named routes can be used to generate URLs or redirects
 * `route` and `redirect` helper functions
 */
Route::get('/user/{id}/profile/{name}', [UserController::class, 'show']
)->name('profile');


// Route Groups

/**
 * 1. Middleware grouping 
 * https://laravel.com/docs/10.x/routing#route-group-middleware
 * 
 * 2. Controller grouping 
 * https://laravel.com/docs/10.x/routing#route-group-controllers
 * 
 * 3. Subudomain
 * https://laravel.com/docs/10.x/routing#route-group-subdomain-routing
 * 
 * 4. Route Prefixes
 * https://laravel.com/docs/10.x/routing#route-group-prefixes
 * 
 * 
 * ! FOR ME !
 * Apply the route grouping, prefixes, and name prefixes.
 */