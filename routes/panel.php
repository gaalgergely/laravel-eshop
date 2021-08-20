<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
|
*/

Route::get('index', 'PanelController@index')->name('panel');
Route::resource('products', ProductController::class);

Route::get('users', 'UserController@index')->name('users.index');
Route::post('users/admin/{user}', 'UserController@toggleAdmin')->name('users.admin.toggle');
