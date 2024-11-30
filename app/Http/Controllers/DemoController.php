<?php

namespace App\Http\Controllers;

use Faker\Extension\FileExtension;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

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

   //Multipart/From-Data -> I can upload file
   function FormData(Request $request)
   {
       $photoFile = $request->file("photo");

       $fileSize = $photoFile->getSize();
       $fileType = $photoFile->getMimeType();
       $fileGetContents = file_get_contents($photoFile->getRealPath());
        $FileOriginalName = $photoFile->getClientOriginalName();
        $FileTempName = $photoFile->hashName();
        $FileExtension = $photoFile->getClientOriginalExtension();
   
        return response()->json([
            "fileSize"=> $fileSize,
            "fileType"=> $fileType,
            "name"=> $FileOriginalName,
            "FileTempName"=> $FileTempName,
            "FileExtension"=> $FileExtension,
        ]);
   }

    //file upload 
    function fileUpload (Request $request){
     $fileName = $request->file("photo");
     $fileName->storeAs("upload",$fileName->getClientOriginalName());
     $fileName->move(public_path("upload"),$fileName->getClientOriginalName());
     return true;
    }

    //request ip
    function IpAddress(Request $request):string{
      $ip = $request->ip();
      return $ip ;
    }

    //content negotiation
    function ContentNeg(Request $request):int{

        if($request->accepts(["application/json"])){
            return 1;
        }
        else{
            return 0;
        }
    }

    //request cookies
}
