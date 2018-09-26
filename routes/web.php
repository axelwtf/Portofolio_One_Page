<?php

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
    return view('monSite');
});
Route::get('/mail', function () {
    return view('mail');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mail', 'ContactController@index');
Route::get('/readMail/{id}', 'MailController@index');
Route::post('/create', 'ContactController@create');

