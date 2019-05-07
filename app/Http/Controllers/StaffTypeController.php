<?php

namespace App\Http\Controllers;

use App\staff_type;
use Illuminate\Http\Request;

class StaffTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff type.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\staff_type  $staff_type
     * @return \Illuminate\Http\Response
     */
    public function show(staff_type $staff_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staff_type  $staff_type
     * @return \Illuminate\Http\Response
     */
    public function edit(staff_type $staff_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff_type  $staff_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff_type $staff_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff_type  $staff_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff_type $staff_type)
    {
        //
    }
}
