<?php

use App\Http\Controllers\NewResourceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestInvokeController;
use App\Http\Controllers\TestResourcesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    echo 'testing';
});



// normal Controller use prefix and controller and groupe functions

// Route::prefix('user')->controller(TestResourcesController::class)->group(function () {
//     Route::get('/', 'index');
//     Route::get('create', 'create');
//     Route::get('store', 'store');
// });



// normal Controller

// Route::get('/', [TestResourcesController::class, 'index']);
// Route::get('create', [TestResourcesController::class, 'create']);
// Route::get('store', [TestResourcesController::class, 'store']);



// resource Controller with except and only

// Route::resource('user', TestResourcesController::class)->except(['index']);
// Route::resource('user', TestResourcesController::class);
// Route::get('user/{name?}', TestInvokeController::class)->name('name')->middleware('throttle:testLimiter');
Route::get('user/{age?}', TestInvokeController::class)->name('name')->middleware('testGroup');

Route::post('products', function () {
    echo 'success';
})->name('pro');

// invoke Controller
// just call one time

// Route::get('inv', TestInvokeController::class);


Route::prefix('project')->controller(ProjectController::class)->group(function () {
    Route::get('/', 'main');
    Route::get('about', 'about');
    Route::get('contact', 'contact');
    Route::post('contact', 'contact')->name('con');
});



Route::resources(
    [
        'product' => TestResourcesController::class,
        'user' => NewResourceController::class
    ]
    // [
    //     'except' => ['product' => 'index', 'user' => 'show'],
    // ]
);
