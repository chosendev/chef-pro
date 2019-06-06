<?php

namespace App\Http\Controllers;

use App\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = menu::paginate(6);
        return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'food_combination' => 'required',
            'price' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required'
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        $form_data = array(
            'food_combination' => $request->food_combination,
            'price' => $request->price,
            'status' => $request->status,
            'date' => $request->date,
            'image' => $imageName,
        );
        menu::create($form_data);
        return redirect('menus/create')->with('success', 'A new Menu has been Successfully Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\menu $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\menu $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\menu $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\menu $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        //
    }
}
