<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');

Route::get('/panel', 'App\Http\Controllers\MemberController@index')->name('panel');

Route::post('/store-member', 'App\Http\Controllers\MemberController@store')->name('store-member');

Route::get('/check-member', 'App\Http\Controllers\MemberController@check')->name('check-member');
