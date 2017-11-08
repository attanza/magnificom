<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dani-maya-wedding-invitation', function () {
    return view('invitation');
});

Route::get('/portfolio', 'Portfolio\PortfolioController@index')->name('portfolio.index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

