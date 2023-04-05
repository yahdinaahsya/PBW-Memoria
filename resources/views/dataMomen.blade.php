@extends('layout.app')

@section('content')

<div class="container">
            <h1>Daftar Momen</h1>
            <table class="table table-success table-striped mt-3">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                    @foreach ($dtMomen as $item)
                    <tr>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->message}}</td>
                        <td>{{$item->gambar}}</td>
                    </tr>
                    @endforeach
            </table>
    </div>

@endsection