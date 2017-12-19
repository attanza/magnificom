<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
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
// -----------------------------------
// Auth
// -----------------------------------
Auth::routes();
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['middleware' => 'guest'], function () {
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login')->name('login');
});
// -----------------------------------
// Manage
// -----------------------------------
Route::group(['middleware' => 'admin', 'prefix' => 'manage', 'namespace' => 'Manage'], function(){
	Route::get('/', 'DashboardController@index')->name('dashboard.index');
	Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
	Route::resource('users', 'UserController')->except(['destroy']);
});