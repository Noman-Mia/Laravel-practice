<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoHasinController extends Controller
{
    
    function logic(){
        $even = false;
        $number = 19;
        $totalNumberOfMales = 100;
        $totalNumberOfFemales = 100;

        return view('demo.condition',['even'=>$even,'number'=>$number, 'm'=>$totalNumberOfMales, 'f'=>$totalNumberOfFemales]);
    }

}
