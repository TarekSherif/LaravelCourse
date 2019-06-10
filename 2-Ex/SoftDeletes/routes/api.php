<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

        Route::resource('branches', 'BranchesController', ['except' => ['create', 'edit']]);

        Route::resource('voluntarydegrees', 'VoluntarydegreesController', ['except' => ['create', 'edit']]);

});
