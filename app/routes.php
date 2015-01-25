<?php

Route::get('/', 'HomeController@showWelcome');
Route::get('{version}/{page}', 'Page');