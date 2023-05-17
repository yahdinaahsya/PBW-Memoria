@extends('layout.app')

@section('content')
<div class="flex justify-center">
    <p class="text-4xl font-extrabold">Kalender Memori</p>
</div>
<div class="text-gray-700 md:mx-20 mx-5 my-5 p-5 shadow-xl border border-gray-100 rounded-xl">
	<!-- Component Start -->
	<div class="flex flex-grow overflow-auto"> 
            <div class="flex flex-col flex-grow">
                <div class="flex items-center mt-4 justify-between">
                    <div class="flex">
                        <h2 id="currentYear" class="ml-2 text-xl font-bold leading-none"></h2>
                        <p id="currentMonth" class="ml-2 text-xl font-bold leading-none"></p>
                    </div>
                    <div class="flex ml-6">
                        <button onClick="minusMonth()">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                              </svg>
                        </button>
                        <button onClick="plusMonth()">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                        </button>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-7 mt-4 font-bold text-center hidden">
                    <div class="pl-1 text-sm">Sunday</div>
                    <div class="pl-1 text-sm">Monday</div>
                    <div class="pl-1 text-sm">Tuesday</div>
                    <div class="pl-1 text-sm">Wednesday</div>
                    <div class="pl-1 text-sm">Thursday</div>
                    <div class="pl-1 text-sm">Friday</div>
                    <div class="pl-1 text-sm">Saturday</div>
                </div>

                <div id="tanggal" class="grid flex-grow w-full h-auto md:grid-cols-7 grid-rows-5 gap-px pt-px mt-1 bg-gray-100 rounded-md"></div>
            </div>
        </div>
	<!-- Component End  -->
</div>

<button data-modal-target="momenModal" data-modal-toggle="momenModal" class="hidden block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="momenModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#E7ECFF] rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-end p-4 border-b rounded-t dark:border-gray-950">
                <h3 id="tanggalModal" class=" text-xl font-semibold text-gray-900 dark:text-white"></h3>  
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="momenModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 grid grid-cols-2">
              <div>
                <img id="gambar" class="h-auto max-w-full" src="#">

              </div>
              <div>
                  <div class="text-center font-bold">
                      <h id="judulModal" class="uppercase"></h1>
                  </div>
                  <div>
                      <h2 class="font-semibold">Deskripsi</h2>
                  </div>
                  <div>
                      <p id ="messageModal"></p>
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

<script>
    var d = new Date();
    var currMonth = d.getMonth();
    var currYear = d.getFullYear();
    const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    function updateLabel(){
        document.getElementById("currentMonth").innerHTML = months[currMonth];
        document.getElementById("currentYear").innerHTML = currYear;
    }

    function getInfoMemori(id){
            $.ajax({
                url:"/getmemori/info/"+id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    document.getElementById("tanggalModal").innerHTML=data.tanggal;
                    document.getElementById("judulModal").innerHTML=data.judul;
                    document.getElementById("messageModal").innerHTML=data.message;
                    document.getElementById("gambarModal").src="/storage/posts/"+data.gambar;
                }
            })
    }

    function getMemoriData() {
        var backgroundClasses = ["bg-red-400", "bg-orange-400", "bg-amber-400", "bg-lime-400","bg-blue-400", "bg-green-400", "bg-yellow-400", "bg-purple-400", "bg-emerald-400", "bg-teal-400", "bg-cyan-400", "bg-sky-400", "bg-indigo-400", "bg-violet-400", "bg-fuchsia-400", "bg-pink-400", "bg-rose-400","bg-red-300", "bg-orange-300", "bg-amber-300", "bg-lime-300","bg-blue-300", "bg-green-300", "bg-yellow-300", "bg-purple-300", "bg-emerald-300", "bg-teal-300", "bg-cyan-300", "bg-sky-300", "bg-indigo-300", "bg-violet-300", "bg-fuchsia-300", "bg-pink-300", "bg-rose-300", "bg-red-200", "bg-orange-200", "bg-amber-200", "bg-lime-200","bg-blue-200", "bg-green-200", "bg-yellow-200", "bg-purple-200", "bg-emerald-200", "bg-teal-200", "bg-cyan-200", "bg-sky-200", "bg-indigo-200", "bg-violet-200", "bg-fuchsia-200", "bg-pink-200", "bg-rose-200"];

        $.ajax({
            url: "/getmemori/"+currYear+"/"+(currMonth+1),
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                data.forEach(function(element){
                    console.log(element);
                    const nestedDiv = document.getElementById(element.tanggal);
                    
                    // Create the first button element
                    const button1 = document.createElement('button');
                    button1.classList.add('flex', 'items-center', 'flex-shrink-0', 'py-2', 'text-xs', 'opacity-50','hover:opacity-100', backgroundClasses[Math.floor(Math.random()*backgroundClasses.length)], 'rounded');
                    button1.addEventListener("click", function() {
                        var modal = document.getElementById("momenModal");
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                        getInfoMemori(element.id);
                    });

                    const span1_3 = document.createElement('span');
                    span1_3.classList.add('ml-2', 'font-bold', 'leading-none', 'truncate');
                    span1_3.textContent = element.title;
                    button1.appendChild(span1_3);

                    // Append the span elements to the nested div
                    nestedDiv.appendChild(button1);
                });
            }
        });
    }

    function generateDays(year, month){
        document.getElementById("tanggal").innerHTML = ""; // Bersihkan isi hari kalender

        // Dapatkan pada hari pada taggal pertama pada bulan yang sedang dibuka
        const day = new Date(year, month - 1, 1);
        for(let j = 0; j < day.getDay();j++){
            const emptyDiv = document.createElement("div");
            emptyDiv.classList.add('hidden', 'md:block');
            document.getElementById("tanggal").appendChild(emptyDiv);
        }

        const jmlTanggal = new Date(year, month, 0).getDate(); // Dapatkan jumlah hari dalam bulan yang sedang dibuka
        for(let i = 1; i <= jmlTanggal; i++)
        {
            // Create the main div element
            const mainDiv = document.createElement('div');
            mainDiv.classList.add('relative', 'flex', 'flex-col', 'bg-white', 'hover:bg-purple-100','group', 'h-28');

            // Create the span element
            const span = document.createElement('span');
            span.classList.add('mx-2', 'my-1', 'text-xs', 'font-bold');
            span.textContent = i;

            // Create the nested div element
            const nestedDiv = document.createElement('div');
            nestedDiv.id = i;
            nestedDiv.classList.add('flex', 'flex-col', 'px-1', 'py-1', 'overflow-auto', 'gap-px');

            // Append the span and nested div to the main div
            mainDiv.appendChild(span);
            mainDiv.appendChild(nestedDiv);

            document.getElementById("tanggal").appendChild(mainDiv);
        }
    }

    function updateCalendar(){
        generateDays(currYear, currMonth+1);
        updateLabel();
    }

    function plusMonth(){
        currMonth = (currMonth+1);
        if(currMonth > 11){
            currYear = currYear + 1;
        }
        currMonth = (currMonth)%12;
        updateCalendar();
        getMemoriData()
    }

    function minusMonth(){
        currMonth = (currMonth-1);
        if(currMonth < 0){
            currYear = currYear - 1;
            currMonth = 11;
        }
        updateCalendar();
        getMemoriData();
    }

    generateDays(currYear, currMonth+1);
    updateLabel();
    getMemoriData();
</script>

 
@endsection