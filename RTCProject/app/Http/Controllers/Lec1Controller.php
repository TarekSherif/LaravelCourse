<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lec1Controller extends Controller
{
        // Lec1
        //===================
        //===================

        // BasicRouting
        public function  BasicRouting() {
            return "<h1>HI RTC</h1>";
        }
        public function BasicRoutingWithRequiredParameters  ($Name) {
            return "<h1>Hello $Name</h1>";
        }

        public function BasicRoutingWithOptionalParameters ($Name="RTC"){
            return "<h1>Hello $Name</h1>";
        }

    
}
