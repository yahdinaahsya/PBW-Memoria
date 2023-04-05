@extends('layout.app')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<section style="font-family: Montserrat" class=" bg-white flex font-medium items-center justify-center h-screen">

    <section class="w-64 mx-auto bg-[#E7ECFF] rounded-2xl px-8 py-6 shadow-lg">
        <div class="flex items-center justify-between">
            <span class="text-gray-400 text-sm">Profil</span>
            <span class="text-emerald-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
              </svg>
            </span>
        </div>
        <div class="mt-6 w-fit mx-auto">
            <img src="{{ asset('images_public/bonekaUngu.png') }}" class="rounded-full w-28 ">
        </div>

        <div class="mt-8 ">
            <h2 class="text-black font-bold text-2xl tracking-wide">
                {{Auth::user()->name}}
            </h2>
        </div>
        

        <div class="h-1 w-full bg-black mt-8 rounded-full">
            <div class="h-1 rounded-full w-2/5 bg-[#111B47] "></div>
        </div>

        <div class="mt-3 text-white text-sm">
            <span class="text-gray-400 font-semibold">Momen :</span>
            <span>

            </span>
            <p class="text-emerald-400 font-semibold mt-2.5" >
            Kapsul : {{$bykKapsul}}
            </p>
        </div>

    </section>

</section>

@endsection