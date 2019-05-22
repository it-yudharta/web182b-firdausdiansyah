<?php

namespace App\Http\Controllers;

use App\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate(10);

        return view('item.index', ['items' => $items]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item;
        $item->name = $request->input('name');
        $item->address = $request->input('address');
        $item->category = $request->input('category');
        $item->phone = $request->input('phone');
        $item->save();

        $data = new \App\Data;
        $data -> namaBarang = $request['category'];
        $data -> harga = "-";
        $data -> tanggal = date('Y-m-d');
        $data -> save();

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = item::find($id);

        return view('item.edit', ['items' => $items]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = item::find($id);
        $item->name = $request->input('name');
        $item->address = $request->input('address');
        $item->category = $request->input('category');
        $item->phone = $request->input('phone');
        $item->update();

        $item = \App\Data::find($id);
        $item->namaBarang = $request->input('category');
        $item->update();

        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = item::find($id);
        $item->delete($id);    
    
        $data = \App\Data::where('id', $id);
        $data->delete();
        return redirect()->back();
    }
}
