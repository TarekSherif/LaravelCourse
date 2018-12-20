<?php

namespace App\Http\Controllers;

use App\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(test $test)
    {
        $Data = array('Tests' => $test->all());
       return view("Test.index", $Data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      //  echo "sdfsdfsdf";
return view("Test.create");



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $test=new test();
        $test->Tname=$request->Tname;
        $test->Tphone=$request->Tphone;

        $test->save();

        // return view("Test.index");
       return redirect()->action('TestController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // print_r($request>all());
        //
        $test= test::find($id);
        $Data = array('test' =>  $test );
      return view ("Test.edit", $Data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test $test)
    {
        //
        $test= test::find($request->id);

$test->Tname=$request->Tname;
$test->Tphone=$request->Tphone;
$test->save();
return redirect()->action('TestController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test= test::find($id);

        $test->delete();
        return redirect()->action('TestController@index');
    }
}
