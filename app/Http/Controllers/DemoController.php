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
     return response("my name is {$name} and age is {$age}");
   }

   //Request Header
   function DemoHeader(Request $request):string{
      $name =$request->header("name");
      $age =$request->header("age");
      return response("name {$name},age {$age}");
   }

   //All in one like, URLparameters, JsonBody,Header
   function URLparametersJsonBodyHeader (Request $request):array{
      $name =$request->header("name");
      $age =$request->header("age");
      $city =$request->input("city");
      $postcode =$request->input("postcode");
      return array(
         "name"=> $name,
         "age"=> $age,
         "city"=> $city,
         "postcode"=> $postcode

      );
   }
      
}
