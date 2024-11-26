<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   function DemoAction(){
    return response('this is my first laravel work');
   }

   function DemoSave(Request $request){
    $name =$request->name;
    $age =$request->age;
    return response("My name is {$name} and age is {$age}");
   }
}
