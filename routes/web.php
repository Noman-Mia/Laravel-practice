<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//request
Route::get('/about',[DemoController::class,"DemoAction"] );
Route::get("/hello/{name}/{age}",[DemoController::class,"DemoSave"] );
Route::get("/jsonBody",[DemoController::class,"DemoJsonBody"] );
Route::get("/DemoHeader",[DemoController::class,"DemoHeader"] );    
Route::get("/hello/{name}/{age}",[DemoController::class,"URLparametersJsonBodyHeader"] );
Route::post("/formData",[DemoController::class,"FormData"] );
Route::post("/fileUpload",[DemoController::class,"fileUpload"] );
Route::post("/IpAddress",[DemoController::class,"IpAddress"] );
Route::post("/ContentNeg",[DemoController::class,"ContentNeg"] );
Route::post("/DemoCookies",[DemoController::class,"DemoCookies"] );