<?php

Route::get('/', 'HomeController@getIndex');
Route::get('{version}/{page}', 'Page@getIndex');
Route::post('hook', function() {
    shell_exec('git submodule update --remote --merge');
    return Response::json(array('success' => true));
});
