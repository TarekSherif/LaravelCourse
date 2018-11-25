<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lec3Controller extends Controller
{
    //
     public function ShowForm()
    {
       return view("Lec3.ViewShowForm");
    }
    public function ViewData()
    {
     print_r($_POST);
    }

}
