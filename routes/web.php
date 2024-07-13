<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/regist', function () {
    return view('guest.index');
});

Route::get('/login', function () {
    return view('guest.login.login');
});

Route::get('/home', function () {
    return view('users.home.home');
});

Route::get('/profile', function () {
    return view('users.profile.profile');
});

Route::get('/account/{id}', function($id) {
    return view('account');
});

Route::post('/account/request', function(Request $request) {
    dd($request->all());
});

Route::get('/topup/{id}', function($id) {
    return view('topup');
});