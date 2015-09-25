<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dynfield', function () {
    return view('pages.dynfield');
});

Route::resource('flyers','FlyersController');

Route::get('{zip}/{street}','FlyersController@show');
