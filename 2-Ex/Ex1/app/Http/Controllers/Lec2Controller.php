<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lec2Controller extends Controller
{

    
public function ViewRoutingWithPassData (){
    $data= array('Name' => "RTC" );
    return view("Lec2.ViewRoutingWithPassData",$data);
    }

    public function ViewRoutingWithPassRequestData($Name="RTC")
    {
        $data= array('Name' => $Name );
        return view("Lec2.ViewRoutingWithPassData",$data);
    }
 
    //
    public function BladeSyntax ($Name="RTC"){
        $data= array('Name' => $Name );
        return view("Lec2.BladeSyntax",$data);
        }
    
}
