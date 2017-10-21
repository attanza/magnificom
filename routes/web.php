<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dani-maya-wedding-invitation', function () {
    return view('invitation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
