<?php

use Illuminate\Support\Facades\Route;

Route::resource('todo', 'sohel\crud\Http\Controllers\CrudController');
// Route::get('/todo', 'sohel\crud\Http\Controllers\CrudController@index')->name('index');
// Route::get('todo/create', 'sohel\crud\Http\Controllers\CrudController@create')->name('create');
// Route::post('todo/store', 'sohel\crud\Http\Controllers\CrudController@store')->name('store');
// Route::post('todo/update', 'sohel\crud\Http\Controllers\CrudController@update')->name('update');
