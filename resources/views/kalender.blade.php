@extends('layout.app')

@section('content')
    <div class="text-gray-700">

        <!-- Component Start -->
        <div class="flex flex-grow w-screen h-screen overflow-auto">

<ol class=" px-10 m-10 relative border-l border-gray-200 dark:border-gray-700">                  
    <li class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Juni 2021</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Lolos UTBK</h3>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Masuk USK</p>
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
    </li>
    <li class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">UTS Diskrit menyeramkan</h3>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">ngeri kali.</p>
    </li>
    <li class="ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Mei 2022</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">UAS Diskrit</h3>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">suSahhhhh</p>
    </li>
</ol>


            <div class="flex flex-col flex-grow">
                <div class="flex items-center mt-2">
                    <div class="flex ml-6">
                        <button>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <h2 class="ml-2 text-xl font-bold leading-none">September, 2020</h2>
                </div>
                <div class="grid grid-cols-7 mt-4">
                    <div class="pl-1 text-sm">Mon</div>
                    <div class="pl-1 text-sm">Tue</div>
                    <div class="pl-1 text-sm">Wed</div>
                    <div class="pl-1 text-sm">Thu</div>
                    <div class="pl-1 text-sm">Fri</div>
                    <div class="pl-1 text-sm">Sat</div>
                    <div class="pl-1 text-sm">Sun</div>
                </div>
                <div id="tanggal" class="grid flex-grow w-full h-auto grid-cols-7 grid-rows-5 gap-px pt-px mt-1 bg-[#AC94FA]"> </div>
            </div>
        </div>
        <!-- Component End  -->

        <script>
            var d = new Date();
            var currMonth = d.getMonth();
            var currYear = d.getFullYear();
            const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

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
                for (let i=1; i <= jmlTanggal; i++) {
                    // Membuat elemen <div> utama
                    const divMain = document.createElement('div');
                    divMain.classList.add('relative', 'flex', 'flex-col', 'bg-white', 'group');

                    // Membuat elemen <span> tanggal
                    const spanTanggal = document.createElement('span');
                    spanTanggal.classList.add('mx-2', 'my-1', 'text-xs', 'font-bold');
                    spanTanggal.textContent = '1 September';
                    divMain.appendChild(spanTanggal);

                    // Membuat elemen <div> container event
                    const divEventContainer = document.createElement('div');
                    divEventContainer.classList.add('flex', 'flex-col', 'px-1', 'py-1', 'overflow-auto');
                    divMain.appendChild(divEventContainer);

                    // Membuat button event 1
                    const buttonEvent1 = createEventButton('8:30am', 'An unconfirmed event');
                    divEventContainer.appendChild(buttonEvent1);

                    // Membuat button event 2
                    const buttonEvent2 = createEventButton('2:15pm', 'A confirmed event');
                    divEventContainer.appendChild(buttonEvent2);

                   
                    // Fungsi untuk membuat button event
                    function createEventButton(time, title) {
                        const button = document.createElement('button');
                        button.classList.add('flex', 'items-center', 'flex-shrink-0', 'h-5', 'px-1', 'text-xs', 'hover:bg-gray-200');

                        const spanDot = document.createElement('span');
                        spanDot.classList.add('flex-shrink-0', 'w-2', 'h-2', 'border', 'border-gray-500', 'rounded-full');
                        button.appendChild(spanDot);

                        const spanTime = document.createElement('span');
                        spanTime.classList.add('ml-2', 'font-light', 'leading-none');
                        spanTime.textContent = time;
                        button.appendChild(spanTime);

                        const spanTitle = document.createElement('span');
                        spanTitle.classList.add('ml-2', 'font-medium', 'leading-none', 'truncate');
                        spanTitle.textContent = title;
                        button.appendChild(spanTitle);

                        return button;
                    }

                    // Contoh penggunaan:
                    const containerElement = document.getElementById("tanggal");
                    containerElement.appendChild(divMain);
                }
            }

            generateDays(currYear, currMonth+1);
            
        </script>

    </div>
@endsection
