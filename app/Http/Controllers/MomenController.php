<?php

namespace App\Http\Controllers;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Momen;
use App\Models;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Str;
use Intervention\Image\Facades\Image;

class MomenController extends Controller
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
    public function store(Request $request): RedirectResponse
    {
        //dd($request->all());
        $this->validate($request, [
            'tanggal' =>'required|date',
            'judul' => 'required',
            'message' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) { // tambahkan kondisi untuk memeriksa apakah input gambar diisi atau tidak
            $gambar = $request->file('gambar');

            // membuat folder baru jika belum ada
            $path = storage_path('/public/posts');
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path, 0777, true, true);
            }

            // menyimpan file gambar ke direktori 
            $filename = $gambar->getClientOriginalName();
            $gambar->storeAs('/public/posts', $filename);
        } else {
            $filename = null; // jika input gambar tidak diisi, set nilai filename menjadi null
        }

        $date = $request->tanggal;
        $formattedDate = date('Y-m-d H:i:s', strtotime($date));
    
    //dd($request->all());
    //dd($image);
        Momen::create([
            'tanggal' => $formattedDate,
            'judul' => $request->judul,
            'message' => $request->message,
            'gambar' => $filename,
        ]);

        return redirect()->back()->with('success', 'Memori berhasil diabadikan!');

    }


    /**
     * Display the specified resource.
     */
    public function show(Momen $momen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Momen $momen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMomenRequest $request, Momen $momen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Momen $momen)
    {
        //
    }
}