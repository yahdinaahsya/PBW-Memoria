@extends('layout.app')

@section('content')

<div class="grid md:grid-cols-2 xl:mx-20">
    <div class="pl-20 my-10 sm:my-20 items-end">
        <p class="text-5xl font-medium font-Roboto m-4 ml-0 ">
            Rekam Setiap Momen Terbaik Anda 
        </p>
        <br>
        <p class="text-[#505F98] text-justify font-Roboto">
            Setiap langkah anda pasti menyisahkan kenangan indah. Entah itu bersama seseorang yang anda sayangi atau bahkan dengan barang favorit kesayangan anda. 
        </p>
        <br>
        <p class="text-[#505F98] text-justify font-Roboto">    
            Ayo rekam dan abadikan setiap momen itu disini!
        </p>
        <br>
        <p>
            <a href="#" class ="bg-[#505F98] inline block p-3 px-19 text-center text-white font-medium font-Roboto">
                Simpan Momen Anda Disini
            </a>
        </p>
    </div>
    <div>
        <img src="{{ asset('images_public/camera.webp') }}">
    </div>
</div>

<div class="grid md:grid-cols-2 xl:mx-20">
    <div>
        <img src="{{ asset('images_public/phoneCute.webp') }}">
    </div>    
    <div class="pr-20 my-10 sm:my-20 items-end">
        <p class="text-4xl font-medium font-Roboto m-4 ml-0 ">
            Kenang Kembali Momen Berkesan Anda 
        </p>
        <br>
        <p class="text-[#505F98] text-justify font-Roboto">
            Melihat kembali momen-momen berkesan adalah hal yang paling menyenangkan. 
        </p>
        <br>
        <p class="text-[#505F98] text-justify font-Roboto">    
            Untuk mengisi waktu luang anda atau pun sekedar mengingat-ingat kembali dan menjadi bahan obrolan bersama orang tersayang anda
        </p>
        <br>
        <p>
            <a href="#" class ="bg-[#111B47] inline block p-2 px-10 text-center text-white font-medium font-Roboto">
                Lihat Momen
            </a>
        </p>
    </div>
</div>

<div class="my-20 w-full">
    <p class="text-2xl text-center font-bold font-Roboto">Fitur Lainnya</p>
    <div class="flex sm:flex-nowrap flex-wrap justify-center">
        <div class="p-10 my-10 mx-5 sm:mx-36 bg-gray-200 hover:bg-gray-300 rounded-3xl">
            <a href="kapsulwaktu">
                <img class="object-cover h-28 w-28" src="{{asset('/images_public/pesawat.webp')}}">
                <p class="font-bold text-xs text-center font-Roboto">Kapsul Waktu</p>
            </a>
        </div>
        <div class="p-10 my-10 mx-5 sm:mx-36 bg-gray-200 hover:bg-gray-300 rounded-3xl">
            <a href="#">
                <img class="object-cover h-28 w-28" src="{{asset('/images_public/love.webp')}}">
                <p class="font-bold text-xs text-center font-Roboto">Random Memori</p>
            </a>
        </div>
    </div>
</div>

@endsection