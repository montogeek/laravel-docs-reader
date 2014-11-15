<?php

Route::get('/', 'HomeController@showWelcome');
Route::resource('page', 'Page');