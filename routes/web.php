<?php


Route::get('/','KitapController@index');
//Route::get('/','KitapController@search');
Route::resource('kitapbilgis','KitapController');
