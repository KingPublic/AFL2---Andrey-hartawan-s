<?php

use Illuminate\Support\Facades\Route;
//error karena php ku beda versi jdi nda bisa composer install  //berhasilmi
Route::get('/', function () {
    return view('Home');
});