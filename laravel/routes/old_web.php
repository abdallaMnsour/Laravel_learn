<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Route::controller(ProductController::class)->prefix('test')->group(function () {
    Route::get('/', 'show');
    Route::get('/delete/{value}', 't');
    Route::resource('user', UserController::class);
});


Route::get('my_test', function () {
    dump(Session::all());
});
