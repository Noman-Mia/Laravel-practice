<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Class : 11 all are document
//Class : 12 here
//Class : 13 here

//Class : 12 here
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

//response
Route::post("/DemoJson",[DemoController::class,"DemoJson"] );
Route::get("/redirect1",[DemoController::class,"RedirectOne"] );
Route::get("/redirect2",[DemoController::class,"RedirectTwo"] );
Route::get("/fileBinary",[DemoController::class,"fileBinary"] );
Route::get("/fileDownload",[DemoController::class,"fileDownload"] );
Route::get("/Cookies",[DemoController::class,"Cookies"] );
Route::post("/resHeader",[DemoController::class,"resHeader"] );
Route::get("/view",[DemoController::class,"view"] );



//Class : 13 here
Route::get("/tasks",[TaskController::class,"index"]);
Route::get("/",[SiteController::class,'home']); 
Route::get("/about",[SiteController::class,'home']); 