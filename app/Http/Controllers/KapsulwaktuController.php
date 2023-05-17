<?php

namespace App\Http\Controllers;

use App\Models\kapsulwaktu;
use App\Http\Requests\StorekapsulwaktuRequest;
use App\Http\Requests\UpdatekapsulwaktuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KapsulwaktuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
        //dd($request);
        kapsulwaktu::create(['user_id'=>Auth::user()->id, 'message'=>$request->message, 'tanggal'=>$request->tanggal, 'email'=>$request->email]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(kapsulwaktu $kapsulwaktu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kapsulwaktu $kapsulwaktu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekapsulwaktuRequest $request, kapsulwaktu $kapsulwaktu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kapsulwaktu $kapsulwaktu)
    {
        //
    }
}
