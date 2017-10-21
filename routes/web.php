<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dani-maya-weding-invitation', function () {
    return view('invitation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
