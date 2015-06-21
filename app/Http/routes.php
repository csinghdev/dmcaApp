<?php

/**
 *  The Home Page
 */

Route::get('/', 'PagesController@home');

 /**
 *  Notices
 */
Route::resource('notices', 'NoticesController');

/**
 *  confirm notice created.
 */
Route::get('notices/create/confirm', 'NoticesController@confirm');

/**
 *  Authentication
 */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
