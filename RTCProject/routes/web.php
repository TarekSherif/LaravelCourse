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


// Route::get('index', function () {
//     return '<h1>Hello World</h1>';
// });




// // Available Router Methods

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);



// Route::match(['get', 'post'], '/', function () {
//     //
// });

// Route::any('foo', function () {
//     //
// });




// View Routes

// Route::view('/welcome', 'welcome');


Route::get('/', function () {
    return view('welcome');
});

Route::get('index/{id}', function ($id) {
    return "<h1>$id</h1>";
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
