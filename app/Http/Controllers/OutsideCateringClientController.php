<?php

namespace App\Http\Controllers;

use App\outside_catering_client;
use Illuminate\Http\Request;

class OutsideCateringClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outside_catering_clients = outside_catering_client::paginate(6);
        return view('outside_catering_clients.index',compact('outside_catering_clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outside_catering_clients.create');
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
            'client_name'=>'required',
            'cost' => 'required',
            'date' =>'required',
            'address' => 'required',
            'package_id' => 'required',
        ]);
        $outside_catering_clients = new outside_catering_client($request->all());
        $outside_catering_clients->save();
        return redirect('outside_catering_clients/create')->with('success','A new outside catering client has been Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\outside_catering_client  $outside_catering_client
     * @return \Illuminate\Http\Response
     */
    public function show(outside_catering_client $outside_catering_client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\outside_catering_client  $outside_catering_client
     * @return \Illuminate\Http\Response
     */
    public function edit(outside_catering_client $outside_catering_client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\outside_catering_client  $outside_catering_client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, outside_catering_client $outside_catering_client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\outside_catering_client  $outside_catering_client
     * @return \Illuminate\Http\Response
     */
    public function destroy(outside_catering_client $outside_catering_client)
    {
        //
    }
}
