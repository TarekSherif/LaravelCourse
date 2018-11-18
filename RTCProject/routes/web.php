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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('index/{Name?}', function ($Name="") {
    return "<h1>Hello $Name</h1>";
});
// Route::get('/', function () {
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
Route::get("frist",function(){
$data= array('X' => "test" );
    return view("fristView",$data);
    });
    // Route::view('frist', 'fristView');
//  Route::view('/welcome', 'welcome',;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index/{id}', function ($id) {
//     return "<h1>$id</h1>";
// });

