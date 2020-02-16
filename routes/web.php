<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('pages.Cutting.CuttingPlan');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/list','AdminController@UserIndex')->middleware(['auth','can:Access-Admin']);;
Route::get('/user/create','AdminController@UserCreate')->middleware(['auth','can:Access-Admin']);;
Route::post('/user/create','AdminController@PostCreateUser')->middleware(['auth','can:Access-Admin']);;