<?php

namespace App\Http\Controllers;

use App\staff;
use Illuminate\Http\Request;
use App\Http\Requests\StaffRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = staff::all();

        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        $staff = new staff($request->all());
        
        if(!$staff->save()){
            session()->flash('message','Failed to Save');
            return redirect()->back()->withErrors();

        }

        session()->flash('message','Staff saved Successfully');
        return redirect('/staff');   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $staff = staff::find($id);

      return view('staff.show', compact('staff'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        return view ('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $staff = staff::find($id);

        $staff -> update($request->all());
        if($staff->save())
        {
            return redirect('/staff');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        $staff->delete();

        return redirect('/staff');
    }
}
