<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/sub-admin', function () {
    return view('sub-admin.layouts.app');
});

Route::get('/', function () {
    return view('admin.layouts.app');
});
