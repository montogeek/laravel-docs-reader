<?php

Route::get('/', 'HomeController@getIndex');
Route::get('{version}/{page}', 'Page@getIndex');
Route::post('hook', function() {
    shell_exec('git submodule foreach git pull');
    return Response::json(array('success' => true));
});
