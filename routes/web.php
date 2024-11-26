<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[DemoController::class,"DemoAction"] );
Route::get("/hello/{name}/{age}",[DemoController::class,"DemoSave"] );