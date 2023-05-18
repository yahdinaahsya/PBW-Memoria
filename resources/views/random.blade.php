@extends('layout.app')

@section('content')

<head>
    <div class="m-8 pb-36 text-3xl font-extrabold font-Roboto text-center">Dapatkan Memori Secara Acak</div>
</head>

<div class= "m-8 animate-bounce" >
    <img class="h-auto mx-auto max-w-6/12" src="{{ asset('images_public/Gift.png')}}" alt="Gambar Kado">
</div>

<div class="text-center mb-20">
  <button data-modal-target="momenModal" data-modal-toggle="momenModal" class="text-white font-Roboto bg-red-400 hover:bg-gray-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Acak
  </button>
</div>  

@endsection

<!-- Main modal -->
<div id="momenModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#E7ECFF] rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-end p-4 border-b rounded-t dark:border-gray-950">
                <h3 id="tanggalModal" class=" text-xl font-semibold text-gray-900 dark:text-white">
                </h3>  
              <button onclick="closeModal()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="momenModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 grid grid-cols-2">
              <div>
                <img id = "gambarModal" class="h-auto max-w-full" src="">
              </div>
              <div>
                  <div class="text-center font-extrabold">
                      <h id="judulModal" class="uppercase"></h>
                  </div>
                  <div class="mx-4">
                      <p id = "messageModal"></p>
                  </div>
              </div>
              
            </div>
            <!-- Modal footer -->
            <div class="flex justify-end  items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button onclick="closeModal()" data-modal-hide="momenModal" type="button" class="text-white font-Roboto bg-red-400 hover:bg-gray-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
            </div>
        </div>
    </div>
</div>        

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    //console.log("test");
    function getMomen(){
        $.ajax({
            url:"/get-momen",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                document.getElementById("tanggalModal").innerHTML=data.tanggal;
                document.getElementById("judulModal").innerHTML=data.judul;
                document.getElementById("messageModal").innerHTML=data.message;
                var pic = document.getElementById("gambarModal");
                pic.src="/storage/posts/"+data.gambar;
            }
        })
    }
    getMomen();

    function closeModal() {
        const modal = document.getElementById('momenModal');
        modal.classList.add('hidden');
        modal.setAttribute('aria-hidden', 'true');
        modal.removeAttribute('data-modal-toggle');

        setTimeout(function() {
            location.reload();
        }, 500); // Jeda 500ms sebelum memuat ulang halaman
    }
</script>