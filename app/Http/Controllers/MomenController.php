<?php

namespace App\Http\Controllers;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Momen;
use App\Models;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use \Carbon\Carbon;

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

    function getMemoriData($tahun,$bulan){
        $bulan = $tahun.'-'.sprintf("%02d", $bulan);

        $from = Carbon::parse($bulan)->startOfMonth();
        $to = Carbon::parse($bulan)->endOfMonth();

        $data = momen::where('user_id', Auth::user()->id)->whereBetween('tanggal',[$from, $to])->get();
        $dataKeView =[];
        foreach ($data as $key){
            $tmp = array (
                "tanggal" => Carbon::parse($key->tanggal)->format("d"),
                "title" => $key->judul,
                "message"=> $key->message
            );

            array_push($dataKeView, $tmp);
        }
        return response()->json($dataKeView);
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
        $tanggal = Carbon::now();
    //dd($request->all());
    //dd($image);
        Momen::create([
            'id'=>(string)$tanggal->format('ymd').bin2hex(random_bytes(3)),
            'user_id'=>Auth::user()->id,
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
     * Remove the specified resource from storage.
     */
    public function destroy(Momen $momen)
    {
        //
    }

    /**
     * Dapatkan momen secara acak
     */
    public function acak(Momen $momen)
    {   
        $momen = DB::table('momens')->where('user_id', Auth::user()->id)->pluck('id')->toArray();
        shuffle($momen);
        $randomMoment = reset($momen);
        dd($randomMoment);
    }        

}
