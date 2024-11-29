<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Request
class DemoController extends Controller
{
   //simple request
   function DemoAction(){
    return response('this is my first laravel work');
   }

  //Request url parameter
   function DemoSave(Request $request){
    $name =$request->name;
    $age =$request->age;
    return response("My name is {$name} and age is {$age}");
   }

   //Request json body
   function DemoJsonBody(Request $request){
     $name =$request->input("name");
     $age =$request->input("age");
     return response("my name is {$name}and age is {$age}");
   }
}
