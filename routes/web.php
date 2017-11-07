<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dani-maya-wedding-invitation', function () {
    return view('invitation');
});

Route::get('/portfolio', function () {
    return view('portfolio.bootstrap.portfolio_master');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

