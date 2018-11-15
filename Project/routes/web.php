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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
// Route::get('index', function () {
//     return "hi RTC";
// });

// Route::match(['get','post'],'index', function () {
//     return "<h1>hi RTC</h1>";
// });
// Route::view("index","welcome");

// Route::get('index', function () {
//     return view('welcome');
// });
Route::get('index/{id}', function ($id) {

    return "<h1>$id</h1>";
});



