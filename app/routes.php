<?php

Route::get('/', 'HomeController@getIndex');
Route::get('{version}/{page}', 'Page@getIndex');
Route::post('hook', function() {
    $temp = shell_exec('git submodule update --remote --merge');
    Log::info($temp);
    return Response::json(array('success' => true, 'message' => $temp));
});
