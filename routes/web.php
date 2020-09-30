<?php

use Illuminate\Support\Facades\Route;

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

// Authentication
Auth::routes();

Route::get('/', 'WelcomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.tentangKami');
});

Route::get('/disclaimer', function () {
    return view('pages.disclaimer');
});

Route::get('/redaksi', function () {
    return view('pages.redaksi');
});

Route::get('/media-siber', function () {
    return view('pages.mediaSaber');
});

Route::group(['middleware' => ['auth']], function () {
    // Profil
    Route::get('profil', 'ProfileController@index')->name('profil');
});
