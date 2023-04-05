<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abadikanController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtmomen = momen::all();
        return view('dataMomen');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    /*    $this->validate($request, [
            'tanggal' =>'required|date',
            'judul' => 'required',
            'message' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,gif,svg|max:500'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
    */
    dd($request->all());
        Post::create([
            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'message' => $request->message,
            'gambar' => $gambar->hashName()
        ]);

        return redirect()->route('abadikan')->with(['succes' => 'Data berhasil Disimpan']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
