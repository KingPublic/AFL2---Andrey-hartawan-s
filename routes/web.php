<?php

use Illuminate\Support\Facades\Route;
//error karena php ku beda versi jdi nda bisa composer install  //berhasilmi //semoga bisaaaaaaAAAAAA
Route::get('/', function () {
    return view('Home');
});