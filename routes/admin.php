<?php

Route::view('/backpanel', 'backpanel.dashboard.index')
    ->name('backpanel.dashboard');

// user routes

Route::resource('backpanel/user', 'User\UserController');

/*
Route::get('/backpanel/users', 'User\UserController@index')->name('user.index');
Route::get('/backpanel/users/create', 'User\UserController@create')->name('user.create');
Route::post('/backpanel/users/create', 'User\UserController@store')->name('user.store');
Route::get('/backpanel/users/{user}/edit', 'User\UserController@edit')->name('user.edit');
Route::put('/backpanel/users/{user}/edit', 'User\UserController@update')->name('user.update');
Route::delete('/backpanel/users/{user}/delete', 'User\UserController@destroy')->name('user.destroy');
*/

// role routes

Route::get('/backpanel/role/{role}/assign-permission',
    'User\RoleController@assignPermissionView')
     ->name('role.assign-permission');

Route::post('/backpanel/role/{role}/assign-permission',
    'User\RoleController@assignPermission')
     ->name('role.store-permission');

Route::resource('backpanel/role', 'User\RoleController');

// permission routes

Route::resource('backpanel/permission', 'User\PermissionController');

// category routes

Route::get('backpanel/category/trashed',
    'User\CategoryController@trashedCategory')
     ->name('category.trash');

Route::post('backpanel/category/{category}/restore',
    'User\CategoryController@restoreCategory')
     ->name('category.restore');

Route::delete('backpanel/category/{category}/delete',
    'User\CategoryController@forceDeleteCategory')
     ->name('category.force.delete');

Route::resource('backpanel/category', 'User\CategoryController');


// posts routes

Route::post('backpanel/post/upload',
    'User\PostController@uploadPhoto')
     ->name('post.upload');

Route::get('backpanel/post/trashed',
    'User\PostController@trashedPost')
     ->name('post.trash');

Route::post('backpanel/post/{post}/restore',
    'User\PostController@restorePost')
     ->name('post.restore');

Route::delete('backpanel/post/{post}/delete',
    'User\PostController@forceDeletePost')
     ->name('post.force.delete');

Route::resource('/backpanel/post', 'User\PostController');
