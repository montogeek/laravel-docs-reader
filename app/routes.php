<?php

URL::forceSchema('https');

Route::get('/', 'HomeController@getIndex');
Route::get('/{version}/{page?}', 'Page@getIndex');
