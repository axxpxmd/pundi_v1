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

Route::get('/ketentuan-tulisan', function () {
    return view('pages.ketentuanTulisan');
});

// Other Profile User
Route::get('profil/{name}', 'Profiles\ProfileOtherUserController@index')->name('other-user');

Route::group(['middleware' => ['auth']], function () {
    // Profil
    Route::prefix('profile')->namespace('Profiles')->group(function () {
        Route::get('profile', 'ProfileController@index')->name('profil');
        Route::get('profile/edit', 'ProfileController@edit')->name('profil.edit');
    });
});
