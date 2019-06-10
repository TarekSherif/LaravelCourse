<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('branches', 'Admin\BranchesController');
    Route::post('branches_mass_destroy', ['uses' => 'Admin\BranchesController@massDestroy', 'as' => 'branches.mass_destroy']);
    Route::post('branches_restore/{id}', ['uses' => 'Admin\BranchesController@restore', 'as' => 'branches.restore']);
    Route::delete('branches_perma_del/{id}', ['uses' => 'Admin\BranchesController@perma_del', 'as' => 'branches.perma_del']);
    Route::resource('voluntarydegrees', 'Admin\VoluntarydegreesController');
    Route::post('voluntarydegrees_mass_destroy', ['uses' => 'Admin\VoluntarydegreesController@massDestroy', 'as' => 'voluntarydegrees.mass_destroy']);
    Route::post('voluntarydegrees_restore/{id}', ['uses' => 'Admin\VoluntarydegreesController@restore', 'as' => 'voluntarydegrees.restore']);
    Route::delete('voluntarydegrees_perma_del/{id}', ['uses' => 'Admin\VoluntarydegreesController@perma_del', 'as' => 'voluntarydegrees.perma_del']);



 
});
