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
Route::get('foo', function () {
    return 'Hello World';
});


Route::get('/user', 'UserController@index');

// Available Router Methods

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);



Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});




// View Routes

Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);



// Required Parameters

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});


// Optional Parameters

Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});




// Regular Expression Constraints


Route::get('user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


// Global Constraints


// public function boot()
// {
//     Route::pattern('id', '[0-9]+');

//     parent::boot();
// }




// Named Routes

Route::get('user/profile', function () {
    //
})->name('profile');



Route::get('user/profile', 'UserProfileController@show')->name('profile');

// Generating URLs To Named Routes


// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');



Route::get('user/{id}/profile', function ($id) {
    //
})->name('profile');

$url = route('profile', ['id' => 1]);



// Route Prefixes



Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
    });
});