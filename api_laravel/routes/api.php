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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('users', [App\Http\Controllers\Api\apiController::class, 'index']);

// Route::get('user/{id}', [App\Http\Controllers\Api\apiController::class, 'find']);

// Route::post('user/store', [App\Http\Controllers\Api\apiController::class, 'store']);

Route::get('user/senior', function () {
	return ['username' => 'abdalla', 'email' => 'a.mansour.code@gmail.com'];
});

