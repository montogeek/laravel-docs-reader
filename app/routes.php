<?php

Route::get('/', 'HomeController@getIndex');
Route::get('{version}/{page}', 'Page@getIndex');
