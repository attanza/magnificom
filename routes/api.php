<?php

use Illuminate\Http\Request;
use App\Http\Resources\User\UserR;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return new UserR($request->user());
});

Route::group(['namespace' => '\Api\Auth'], function(){
    // Route::post('register', 'RegisterController@register');
    Route::post('login', 'LoginController@login');
    Route::post('refresh', 'LoginController@refresh');
    Route::post('activate', 'ActivationController@activate');
});