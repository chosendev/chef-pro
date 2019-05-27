<?php

namespace App\Http\Controllers;

use App\StaffType;
use Illuminate\Http\Request;
use App\Http\Requests\StaffTypeRequest;

class StaffTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stafftypes = StaffType::all();

        return view('staff type.index', compact('stafftypes'));
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
    public function store(StaffTypeRequest $request)
    {
        $staff_type = new StaffType($request->all());
        if($staff_type->save())
        {
            session()->flash('message','Saved Successfully');
            return redirect('/staff_type');
        }
        session()->flash('message','Failed To Save');
        return redirect()->back()->withErrors();
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
