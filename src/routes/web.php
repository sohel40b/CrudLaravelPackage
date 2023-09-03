<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
	Route::resource('todo', 'sohel40b\crud\Http\Controllers\CrudController');
});
