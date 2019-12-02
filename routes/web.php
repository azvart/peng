<?php


Auth::routes();
Route::get('category/{id}',"CategoryController@getindex");
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','penguinn@getIndex');
Route::get('{url}','PagesController@getIndex');
Route::post('/home','HomeController@postIndex');
