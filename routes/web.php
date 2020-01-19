<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/user/calculator/{num1}/{num2}', "UserController@calculator");

Route::get('/', "HomeController@home");

Route::get('/about', "HomeController@about");

Route::get('/contract', "HomeController@contract");

Route::get('/help', "HomeController@help");


Route::prefix('/admin')->group(function(){
    Route::get('/',"Admin\AdminController@dashboard");
});