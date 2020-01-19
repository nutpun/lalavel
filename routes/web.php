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

// Route::get('/v',function (){
//    $banner = new \App\Banner();
//    $banner->path= "https://www.cmru.ac.th/assets/images/banners/th/08-01-2020/6b6a7353512aebbbafd77ab80bc35e4512eccf48.jpg";
//    $banner->title = "ประกาศรายชื่อ";
//    $banner->link = "http://www.tcas.cmru.ac.th/pakadtcas631/";
//    $banner->save();
//     return $banner;
// });

route::get('/banners',function () {
    $banners = \App\Banner::all();
    return $banners; 
});