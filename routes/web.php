<?php
use Illuminate\Support\Facades\Route;

Route::get('/','UserController@index');
Route::post('users','UserController@store')->name('user.store');
Route::delete('users/{user}','UserController@destroy')->name('user.destroy');


// Route::resource('pages', 'PageController'); // 7 rutas
Route::get('pages','PageController@index');
Route::post('pages','PageController@store')->name('pages.store');


Route::get('extends','PageController@extends')->name('extends.ex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
