<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/buku',[BukuController::class , 'index']);