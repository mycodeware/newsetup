<?php

Route::group(['middleware' => 'web', 'prefix' => 'kr', 'namespace' => 'Modules\Kr\Http\Controllers'], function()
{
    Route::get('/', 'KrController@index');
});
