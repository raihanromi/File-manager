<?php

use App\Http\Controllers\FileManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::post('/uploadfile',[FileManagerController::class,'upload']);
Route::get('/files',[FileManagerController::class,'getFiles']);


//delete file route
Route::post('/deletefile',[FileManagerController::class,'deleteFile']);