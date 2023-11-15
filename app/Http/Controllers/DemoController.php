<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DemoController extends Controller
{
    // Response String|Int|Null|Boolean
    function Demo1():string{
        return "Welcome to Laravel.";
    }


    // Response Array
    function Demo2(){
        $city=["Dhaka","Rajshahi","Khulna"];

        return $city;
    }

    // Response Json
    function Demo3(){
        // $city=["Dhaka","Rajshahi","Khulna"];
        $address=array(
            "country"=> "Bangladesh",
            "city"=> "Dhaka"
        );

        return response()->json($address);
    }

    // Response data, message, code with JSON
    function Demo4(){
        $address=array(
            "country"=> "Bangladesh",
            "city"=> "Dhaka"
        );

        return response()->json(["message"=>"success","data"=>$address],200);
    }
    
    // Response redirect
    function Demo5(){
        return redirect("Demo1");
    }

    // File Response
    function Demo6():BinaryFileResponse{
        $path="laravel.jpg";

        return response()->file($path);
    }

    // File Download
    function Demo7():BinaryFileResponse{
        $path="laravel.jpg";

        return response()->download($path);
    }

    // Response Cookies
    function Demo8(){
        $name="ostad";
        $value="alemam";
        $expTime=60;
        $path="/";
        $domain=$_SERVER["HTTP_HOST"];
        $secure=true;
        $httpOnly=true;

        // Todo: Solve the problem that cookie does not exist
        return response()->cookie($name, $value, $expTime, $path, $domain, $secure, $httpOnly);
    }

    // Response Header
    function Demo9(){
        return response("Header set successfully")->header("key-1","value-1")
        ->header("key-2","value-2")
        ->header("key-3","value-3");
    }

    // Response Blade View
    function Demo10(){
        return view("response");
    }

}
