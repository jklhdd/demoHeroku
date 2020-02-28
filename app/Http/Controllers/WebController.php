<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use Symfony\Component\Mime\Header\Headers;

class WebController extends Controller
{
    //
       
    public function postClassRoom(Request $request){
        $student = [
            
                "name" => $request->get("input-name"),
                "address" => $request->get("input-address"),
                "email" => $request->get("input-email"),
                "phone" => $request->get("input-phone")
            
        ];
        
        array_push($_SESSION,$student);
        //dd($_SESSION);   
        return view("student_listing",["student" => $_SESSION]);     
        
    }
    public function getClassRoom(){
        //dd($_SESSION);
        return view("student_listing",["student" => $_SESSION]);
    }
    public function addStudent(){
        # code...
        return view("create_student");
    }

    public function homePage()
    {
        return view('home');
    }
    public function shopPage(){
        return view('shop');
    }

}
