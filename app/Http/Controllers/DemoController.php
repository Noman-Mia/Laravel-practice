<?php

namespace App\Http\Controllers;

use Faker\Extension\FileExtension;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

//Class : 12 here
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
       $FileTempName = $photoFile->hashName();
       $FileOriginalName = $photoFile->getClientOriginalName();
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
    function DemoCookies(Request $request):array{
      return $request->cookie();
    }


    //Response
    //json response
    function DemoJson(Request $request):JsonResponse{
        $code = 401;
        $content = array('name'=>'jack','city'=>'dhaka');
        return response()->json($content, $code);
    }

    //Redirect
    function RedirectOne()  {
        return redirect('/redirect2 ');
    }

    function RedirectTwo(){
        return 'hello2';
    }

    //file binary
    function FileBinary(){
        $filePath = "upload/camera.jpg";
        return response()->file($filePath);
    }

    //file download
    function FileDownload(){
        $filePath = "upload/camera.jpg";
        return response()->download($filePath);
    }

    //cookies set 
    function Cookies(){
        $name = "token";
        $value = "this is my data";
        $minutes = 60;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response('hi') ->cookie(
            $name, $value,$minutes, $path,$domain,$secure, $httpOnly
        );
    }

    //response header
    function resHeader(){
        return response('hi') 
        ->header('key1','header value')
        ->header('key2','header value');
    }

    //view 
    function view(){
        return view('home');
    }
}
