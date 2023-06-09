<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Memoria</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Dela Gothic One' rel='stylesheet'>

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="px-4 py-2">
            <div class="container flex flex-wrap md:flex-nowrap items-center justify-between sm:justify-center mx-auto">
                <a href="/" class="flex items-center mr-5">
                    <span class="text-lg" style="font-family: Dela Gothic One">Memoria</span>
                </a>
            <div class="mx-5 text-bold text-transparent sm:text-gray-400 justify-self-start">|</div>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:border-0 md:bg-white">
                    <li>
                        <a href="/" class="block py-2 pl-3 pr-4 rounded-xl md:bg-transparent font-roboto font-bold text-gray-600 md:border-2 border-white hover:bg-gray-100">Home</a>
                    </li>
                    <li>
                        <a href="/abadikan" class="block py-2 pl-3 pr-4 rounded-xl md:bg-transparent font-roboto font-bold text-gray-600 md:border-2 border-white hover:bg-gray-100">Abadikan Momen</a>
                    </li>
                    <li>
                        <a href="/kalender" class="block py-2 pl-3 pr-4 rounded-xl md:bg-transparent font-roboto font-bold text-gray-600 md:border-2 border-white hover:bg-gray-100">Kalender</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-roboto font-bold text-gray-600 rounded-xl md:py-2 md:w-auto md:border-2 border-white hover:bg-gray-100">Fitur Lainnya <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 w-10/12 md:w-44 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-xl">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="kapsulwaktu" class="block px-4 py-2 font-roboto font-bold text-gray-600 hover:bg-gray-100">Kapsul Waktu</a>
                                </li>
                                <li>
                                    <a href="random" class="block px-4 py-2 font-roboto font-bold text-gray-600 hover:bg-gray-100">Random Memori</a>
                                </li>
                        </div>
                    </li>
                    <div class="md:flex md:mx-5">
                        @if(Auth::check())
                        <li>
                            <a href="profil_user" class="hover">
                                <div class="flex hover:bg-gray-300 rounded-xl px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 my-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                    <p class="block pt-2 px-1 md:py-3 text-black font-roboto font-bold rounded-xl">
                                        {{Auth::user()->name}}
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf 
                                <label  for="logout" class= "block py-2 p-4 md:py-2 font-bold text-white bg-red-500 rounded-xl md:border-2 border-white">Keluar</label>
                                <input type="submit" id="logout" hidden/>
                            </form>
                            <!-- <a href="register" class="block py-2 pl-3 pr-4 md:py-3 font-bold text-black rounded-xl">Sign Out</a> -->
                        </li>
                        @else
                        <li>
                                <a href="login" class="block py-2 pl-3 pr-4 md:py-2 text-black font-roboto font-bold rounded-xl hover:bg-gray-100 md:border-2 border-white ">
                                    Masuk
                                </a>
                        </li>
                        <li>
                            <a href="register" class="block py-2 pl-3 pr-4 md:py-2 font-bold text-white bg-red-400 rounded-xl md:border-2 border-white ">Daftar</a>
                        </li>
                        @endif
                    </div>
                </ul>
            </div>
            </div>
        </nav>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

        @yield('content')
    
        <footer class="bg-[#E7ECFF]">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:items-center sm:justify-center">
                    <a href="/" class="items-center text-center mb-4 sm:mb-0">
                        <div class="flex justify-between">
                            <p><span class="text-lg text-center" style="font-family: Dela Gothic One">Memoria</span></p>
                            <ul class="flex items-center mb-6 text-sm text-gray-500 sm:mb-0">
                                <li>
                                    <a href="/"
                                        class="font-roboto text-gray-600 mr-4 hover:underline md:mr-6 ">Home</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="font-roboto text-gray-600 mr-4 hover:underline md:mr-6">About</a>
                                </li>
                                <li>
                                    <a href="#" class="font-roboto text-gray-600 hover:underline">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="border-gray-300 mx-auto" />
                        <span class="block text-sm text-gray-500 sm:text-center">©2023 by Jelly Fish</span>
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>