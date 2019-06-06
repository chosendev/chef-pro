<?php

namespace App\Http\Controllers;

use App\expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = expense::paginate(6);
        return view('expenses.index',compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.create');
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
            'name'=>'required',
            'cost'=>'required',
            'receipt'=>'required',
            'date'=>'required',
        ]);
        $expenses = new expense($request->all());
        $expenses->save();
        return redirect('expenses/create')->with('success','Welcome A board');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
//        $expenses = expense::find($id);
//        return view('expenses.show',compact('expenses'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(expense $expense)
    {
        //
    }
}
