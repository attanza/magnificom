<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dani-maya-wedding-invitation', function () {
    return view('welcome');
});

Route::get('/dani-lesmiadi', 'Portfolio\PortfolioController@index')->name('portfolio.index');
Route::post('post-resume', 'Portfolio\PortfolioController@sendResume')->name('portfolio.sendResume');
Route::get('/mailable', function () {
    $inbox = App\Models\Inbox::find(1);

    return new App\Mail\ResumeMail($inbox);
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

