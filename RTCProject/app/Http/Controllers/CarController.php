<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $data= array('Cars' =>DB::select('select * from Cars'));
    // print_r( $data);
        return view("car.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ("car.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Cname' => 'required',
            'Catag' => 'required',
            'DCar' => 'required',
            'price' => 'required',
            'Type' => 'required',
            'Guarantee' => 'required',
             'Image' => 'required',

            ]);
// |image|mimes:jpeg,png,jpg,gif,svg
            $SQL='INSERT INTO `Cars`(  `Cname`, `Image`,  `DCar`, `Type`, `Catag`, `price`, `Guarantee`) VALUES ( ?,?,?,?,?,?,?)';
            $requestData = array( 
                $request['Cname'],
                $request['Catag' ],
                $request['DCar' ],
                $request['price'],
                $request['Type'],
                $request['Image'],
                $request['Guarantee']);
            
            DB::insert( $SQL,  $requestData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
