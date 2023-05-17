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
<script>
    var d = new Date();
    var currMonth = d.getMonth();
    var currYear = d.getFullYear();
    const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    function updateLabel(){
        document.getElementById("currentMonth").innerHTML = months[currMonth];
        document.getElementById("currentYear").innerHTML = currYear;
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
            mainDiv.classList.add('relative', 'flex', 'flex-col', 'bg-white', 'group', 'h-28', 'hover:border', 'border-black');

            // Create the span element
            const span = document.createElement('span');
            span.classList.add('mx-2', 'my-1', 'text-xs', 'font-bold');
            span.textContent = i;

            // Create the nested div element
            const nestedDiv = document.createElement('div');
            nestedDiv.classList.add('flex', 'flex-col', 'px-1', 'py-1', 'overflow-auto', 'gap-px');

            // Create the first button element
            const button1 = document.createElement('button');
            button1.classList.add('flex', 'items-center', 'flex-shrink-0', 'py-2', 'text-xs', 'hover:bg-gray-200', 'bg-red-300', 'rounded');

            const span1_3 = document.createElement('span');
            span1_3.classList.add('ml-2', 'font-medium', 'leading-none', 'truncate');
            span1_3.textContent = 'Memori';
            button1.appendChild(span1_3);

            // Create the first button element
            const button2 = document.createElement('button');
            button2.classList.add('flex', 'items-center', 'flex-shrink-0', 'py-2', 'text-xs', 'hover:bg-gray-200', 'bg-blue-300', 'rounded');

            const span2_3 = document.createElement('span');
            span2_3.classList.add('ml-2', 'font-medium', 'leading-none', 'truncate');
            span2_3.textContent = 'Memori';
            button2.appendChild(span2_3);

            // Append the span elements to the nested div
            nestedDiv.appendChild(button1);
            nestedDiv.appendChild(button2);

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
    }

    function minusMonth(){
        currMonth = (currMonth-1);
        if(currMonth < 0){
            currYear = currYear - 1;
            currMonth = 11;
        }
        updateCalendar()
    }

    generateDays(currYear, currMonth+1);
    updateLabel();
</script>
@endsection