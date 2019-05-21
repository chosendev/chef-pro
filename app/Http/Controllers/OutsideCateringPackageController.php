<?php

namespace App\Http\Controllers;

use App\outside_catering_package;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class OutsideCateringPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $outside_catering_packages = outside_catering_package::paginate(6);
        return view('outside_catering_packages.index',compact('outside_catering_packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('outside_catering_packages.create');
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
        $request->validate([
            'food_combination' =>'required',
            'price' =>'required',
            'status' =>' required',
        ]);

        $outside_catering_packages = new outside_catering_package($request->all());
        $outside_catering_packages->save();
        return redirect('outside_catering_packages/create')->with('success','Successfully add');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\outside_catering_package  $outside_catering_package
     * @return \Illuminate\Http\Response
     */
    public function show(outside_catering_package $outside_catering_package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\outside_catering_package  $outside_catering_package
     * @return \Illuminate\Http\Response
     */
    public function edit(outside_catering_package $outside_catering_package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\outside_catering_package  $outside_catering_package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, outside_catering_package $outside_catering_package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\outside_catering_package  $outside_catering_package
     * @return \Illuminate\Http\Response
     */
    public function destroy(outside_catering_package $outside_catering_package)
    {
        //
    }
}
