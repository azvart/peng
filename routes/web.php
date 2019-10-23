<?php


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','penguinn@getIndex');
Route::get('{url}','PagesController@getIndex');
