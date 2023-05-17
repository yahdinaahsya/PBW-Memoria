@extends('layout.app')

@section('content')

<head>
    <div class="m-8 pb-36 text-3xl font-extrabold font-Roboto text-center">Dapatkan Memori Secara Acak</div>
</head>

<div class= "m-8 animate-bounce" >
    <img class="h-auto mx-auto max-w-6/12" src="{{ asset('images_public/Gift.png')}}" alt="Gambar Kado">
</div>

<div class="text-center mb-20">
  <button data-modal-target="momenModal" data-modal-toggle="momenModal" type="submit" class="text-white font-Roboto bg-red-400 hover:bg-gray-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <a href="#">Acak</a>
  </button>
</div>  

@endsection

<!-- Main modal -->
<div id="momenModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#E7ECFF] rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-end p-4 border-b rounded-t dark:border-gray-950">
                <h3 class=" text-xl font-semibold text-gray-900 dark:text-white">
                    Tanggal
                </h3>  
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="momenModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 grid grid-cols-2">
              <div>
                <img class="h-auto max-w-full" src="{{ asset('/storage/app/public/posts/kol.jpg')}}">
              </div>
              <div>
                  <div class="text-center font-bold">
                      <h>JUDUL</h1>
                  </div>
                  <div>
                      <h2 class="font-semibold">Deskripsi</h2>
                  </div>
                  <div>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum quasi aspernatur, repudiandae voluptatem, in reiciendis itaque deserunt nobis quas autem dicta aut. Itaque, sequi cupiditate? Eum earum eligendi natus ad.</p>
                  </div>
              </div>
              
            </div>
            <!-- Modal footer -->
            <div class="flex justify-end  items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="momenModal" type="button" class="text-white font-Roboto bg-red-400 hover:bg-gray-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
            </div>
        </div>
    </div>
</div>        