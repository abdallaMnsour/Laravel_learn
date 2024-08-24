<?php

use App\Http\Controllers\CRUDUser;
use App\Http\Controllers\test\TestRoute;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test\TestController;

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
    return view('welcome');
});


// Route::controller(UpdateController::class)->group(function () {
//     Route::get('update', 'update_fun');
//     Route::get('add', 'add_fun');
//     Route::get('delete', 'delete_fun');
//     Route::get('all', 'all_users_fun');
// });

// // طريقه الريسورسس
// Route::resource('crudUser', CRUDUser::class);

// Route::get('update', [UpdateController::class, 'update_fun']);


//Route::get('update', function () {
//    return 'update page exmaple';
//});
//
//Route::get('delete', function () {
//    return 'delete page exmaple';
//});
//
//Route::get('read', function () {
//    return 'read page exmaple';
//});
//
//Route::get('add', function () {
//    return 'add page exmaple';
//});



// Route::get('user/hello_testing', function () {
//     echo 'hello_testing';
// });

// Route::get('user/index_test', function () {
//     echo 'index_test';
// });

// Route::get('user/add_test', function () {
//     echo 'add_test';
// });

// Route::get('user/delete_test', function () {
//     echo 'delte_test';
// });

// Route::get('user/updagte_test', function () {
//     echo 'updagte_test';
// });

// Route::get('user/create_test', function () {
//     echo 'create_test';
// });


// Route::get('delete', [TestController::class, 'delete_fun']);

Route::resource('testing', TestRoute::class)->except(['show']);
