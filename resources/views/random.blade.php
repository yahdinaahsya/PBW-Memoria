@extends('layout.app')

@section('content')

<head>
    <div class="m-8 pb-36 text-3xl font-extrabold font-Roboto text-center">Dapatkan Memori Secara Acak</div>
</head>

<div class= "m-8 animate-bounce" >
    <img class="h-auto mx-auto max-w-6/12" src="{{ asset('images_public/Gift.png')}}" alt="Gambar Kado">
</div>

<div class="text-center mb-20">
  <button type="acak" class="text-white font-Roboto bg-red-400 hover:bg-gray-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Acak</button>
</div>  

@endsection