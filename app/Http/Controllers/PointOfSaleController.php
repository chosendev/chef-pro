<?php

namespace App\Http\Controllers;

use App\point_of_sale;
use Illuminate\Http\Request;

class PointOfSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('point of sale.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('point of sale.create');
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
            'name',
            'order_id',
            'staff_id',
            'date',

        ]);
        $point_of_sale = new point_of_sale($request->all());
        $point_of_sale->save();
        return redirect('point_of_sale/create')->with('success','A point of sale has been registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\point_of_sale  $point_of_sale
     * @return \Illuminate\Http\Response
     */
    public function show(point_of_sale $point_of_sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\point_of_sale  $point_of_sale
     * @return \Illuminate\Http\Response
     */
    public function edit(point_of_sale $point_of_sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\point_of_sale  $point_of_sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, point_of_sale $point_of_sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\point_of_sale  $point_of_sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(point_of_sale $point_of_sale)
    {
        //
    }
}
