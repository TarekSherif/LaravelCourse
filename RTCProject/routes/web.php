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



Route::view('/', 'welcome');


// Lec1
//===================
//===================

// BasicRouting
Route::get('BasicRouting','Lec1Controller@BasicRouting');
// BasicRouting With Required Parameters
Route::get('BasicRoutingWithRequiredParameters/{Name}', 'Lec1Controller@BasicRoutingWithRequiredParameters' ); 
// BasicRouting With Optional  Parameters
Route::get('BasicRoutingWithOptionalParameters/{Name?}', 'Lec1Controller@BasicRoutingWithOptionalParameters' );

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


// Lec2
//===================
//===================
// View Routing
Route::view('ViewRouting', 'Lec2.ViewRouting');
// View Routing With PassData
Route::get("ViewRoutingWithPassData","Lec2Controller@ViewRoutingWithPassData");
// View Routing With PassData
Route::get("ViewRoutingWithPassRequestData/{Name?}","Lec2Controller@ViewRoutingWithPassRequestData");
// BladeSyntax
Route::get("BladeSyntax/{Name?}","Lec2Controller@BladeSyntax");
    
// Lec3
//===================
//===================
Route::get('ShowForm', 'Lec3Controller@ShowForm');
Route::post('ViewData', 'Lec3Controller@ViewData');

Route::resource('Car','CarController');
Route::resource('test','TestController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
