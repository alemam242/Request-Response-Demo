<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;



Route::get('/', function () {
    return view('welcome');
});

//Response string
Route::get('/Demo1', [DemoController::class,'Demo1']);

//Response array
Route::get('/Demo2', [DemoController::class,'Demo2']);

//Response json
Route::get('/Demo3', [DemoController::class,'Demo3']);

//Response data, message, code with JSON
Route::get('/Demo4', [DemoController::class,'Demo4']);

//Response Redirect
Route::get('/Demo5',[DemoController::class,'Demo5']);

//Load Binary File
Route::get('/Demo6',[DemoController::class,'Demo6']);

//Download Binary File
Route::get('/Demo7',[DemoController::class,'Demo7']);

//Response Cookies
Route::get('/Demo8',[DemoController::class,'Demo8']);

//Response Header
Route::get('/Demo9',[DemoController::class,'Demo9']);

//Response Blade View
Route::get('/Demo10',[DemoController::class,'Demo10']);