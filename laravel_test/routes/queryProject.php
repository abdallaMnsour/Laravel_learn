<?php

use App\Http\Controllers\QueryController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->controller(QueryController::class)->group(function () {
  Route::get('/', 'index')->name('main');
  Route::get('add_message', 'add_message')->name('add_comment');
  Route::post('create_comment', 'create')->name('create');
  Route::get('update/{id}', 'update')->name('update');
  Route::get('delete/{id}', 'delete')->name('delete');
});

Route::view('test', 'queryProject.test');