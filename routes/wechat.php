<?php

Route::group(['prefix' => 'menus'], function()
{
    Route::get('show',          'MenusController@show');
    Route::get('create',        'MenusController@create');
    Route::get('delete',        'MenusController@delete');
});

Route::any('/', 'WeChatController@serve');
