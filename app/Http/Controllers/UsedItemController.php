<?php

namespace App\Http\Controllers;

use App\UsedItem;
use Illuminate\Http\Request;
use App\Http\Requests\UsedItemRequest;

class UsedItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $used_items = UsedItem::all();
        return view ('useditems.index', compact('used_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('useditems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsedItemRequest $request)
    {
        $used_item = new UsedItem($request->all());
        if($used_item->save())
        {
            session()->flash('message','Saved Successfully');
            return redirect('/used_item');
        }
        session()->flash('message','Failed to Save');
        return redirect()->back()->withErrors();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\used_item  $used_item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $used_item = UsedItem::find($id);

        return view('useditems.show',compact('used_item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\used_item  $used_item
     * @return \Illuminate\Http\Response
     */
    public function edit(UsedItem $used_item)
    {
        return view('useditems.edit', compact('used_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\used_item  $used_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $used_item = UsedItem::find($id);

        $used_item->update($request->all());
        if($used_item->save())
        {
            return redirect('/used_item');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\used_item  $used_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsedItem $used_item)
    {
        $used_item->delete();

        return redirect('/used_item');
    }
}
