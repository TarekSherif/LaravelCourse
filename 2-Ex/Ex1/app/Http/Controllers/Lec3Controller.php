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
    public function ViewData(Request $request)
    {
        // requestObject
        //==================

        // if ($request->has('_token')) {
        //     echo "true";

        // }
        // else {
        //     echo "false";
        // }
    //  echo $request->input('_token', 'RTC');
    // if (isset($_POST["asdasdas"])) {
    //     echo  $_POST["asdasdas"] ;
    //  }
    //  else {
    //     echo    'RTC';
    //  }

    //  echo $request->input('asdasdas', 'RTC');
//   print_r( $request->input('*userName'));

$request->validate([
    'userName' => 'required | min:5',
    'Password' => 'required',
    ]);
   

echo "Insert";


     
    }




    // public function store(Request $request)
    // {
    //    $this->validate($request,
    //        [
    //            'txtUser' => 'required',
    //            'txtPass' => 'required',
    //        ],
    //        [
    //            'required'=> ':attribute field is required',
    //        ],
    //        [
    //            'txtUser'=>'Username',
    //            'txtPass'=>'Password',
    //        ]);
    // /* <!-- /resources/views/post/create.blade.php -->
    //          <h1>Create Post</h1>
    //         @if (errors->any())
    //             <div class='alert alert-danger'>
    //                 <ul>
    //                     @foreach (errors->all() as error)
    //                         <li>{{ error }}</li>
    //                     @endforeach
    //                 </ul>
    //             </div>
    //         @endif
    // <!-- Create Post Form --> */
    // }


}
