<?php

namespace App\Http\Controllers;

use App\kitchen;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitchen  = kitchen::paginate(6);
        return view('kitchen.index',compact('kitchen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('kitchen.create');
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
            'order_id'=>'required',
            'staff_id' =>'required',
            'order_status'=>'required',
            'date'=>'required',
        ]);
        $kitchen = new  kitchen($request->all());
        $kitchen->save();
        return redirect('kitchen/create')->with('success','Thank you for Registering ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function edit(kitchen $kitchen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kitchen $kitchen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function destroy(kitchen $kitchen)
    {
        //
    }
}
