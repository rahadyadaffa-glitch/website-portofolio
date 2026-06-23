<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    app()->setLocale('en');
    return view('home');
});


