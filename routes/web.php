<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'test resful api';
});
Route::get('/folder' ,function() {
    return view('user.login');
});
Route::get('/testcontroller' ,[UserController::class,'index'] );