<?php

Route::singularResourceParameters();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function() {
    Route::resource('articles', 'ArticlesController');
});
