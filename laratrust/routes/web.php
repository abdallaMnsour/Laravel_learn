<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::prefix('user')->as('user.')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('all');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});

Route::get('test', function () {
    $user = User::first();

    // $user->addRoles(['administrator', 'user']);
dd($user->roles);
    $user->removeRoles($user->roles);
    // $user->syncRoles([1, 2, 4]);
});