<?php

Route::view('/backpanel', 'backpanel.dashboard.index')->name('backpanel.dashboard');

// user routes

Route::get('/backpanel/users', 'User\UserController@index')->name('user.index');

Route::get('/backpanel/users/create', 'User\UserController@create')->name('user.create');

Route::post('/backpanel/users/create', 'User\UserController@store')->name('user.store');

Route::get('/backpanel/users/{id}/edit', 'User\UserController@edit')->name('user.edit');
