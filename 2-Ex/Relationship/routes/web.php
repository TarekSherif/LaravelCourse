<?php
use App\Models\User;
use App\Models\Profile;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("users/{id?}",function($id=-1){
    $users=($id==-1)?User::all():User::find($id);
    dd($users);
});


Route::get("usersWithProfiles/{id?}",function($id=-1){
    if($id==-1){
        $users=   User::with("profile")->get();
    }else{
        $users=   User::where("id",$id)->with("profile")->first();
    }
    dd($users);
});

Route::get("ProfilesWithUsers/{id?}",function($id=-1){
    if($id==-1){
        $Profiles=   Profile::with("user")->get();
    }else{
        $Profiles=   Profile::where("id",$id)->with("user")->first();
    }
    dd($Profiles);
});



Route::get("usersWithPosts/{id?}",function($id=-1){
    if($id==-1){
        $users=   User::with("post")->get();
    }else{
        $users=   User::where("id",$id)->with("post")->first();
    }
    dd($users);
});

Route::get("PostsWithUsers/{id?}",function($id=-1){
    if($id==-1){
        $Posts=   Post::with("user")->get();
    }else{
        $Posts=   Post::where("id",$id)->with("user")->first();
    }
    dd($Posts);
});
