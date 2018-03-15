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
    return view('welcome');
})->name('home');

Route::get('/admin/nope', function () {
    return 'Nope';
})->name('nope');

Route::get('/admin/{id?}', 'RestraintController@redirectUser')->middleware('checkUser');



// Formulaire

Route::get('/form', 'FormController@show');

Route::get('/profile', 'FormController@submit')->name('formResult');

Route::get('/profile/{name}', function ($name) {
    return 'Bienvenue '.$name.' !';
});