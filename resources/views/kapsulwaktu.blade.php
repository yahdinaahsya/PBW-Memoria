@extends('layout.app')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet"  
<script src="../path/to/flowbite/dist/datepicker.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script> 
<p class="text-2xl m-8 text-center font-Roboto font-medium">Kirim Momen Berharga Anda ke Masa Depan Disini</p>
<form class="m-8">
    <div class="grid md:grid-cols-2 xl:mx-20"> 
        <div class="me-8 m-8">
            <div>
                <label for="pesan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan untuk Masa Depan</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Halo, aku yang di masa depan! Apa kabar?..."></textarea>
            </div>
            <div class="pt-6">
                <p>Dikirim Pada</p>
                <div>
                    <ul class="grid w-full gap-6 md:grid-cols-4 my-5">
                        <li>
                            <input type="radio" id="6bulan" name="waktu" value="6" class="hidden peer" required>
                            <label for="6bulan" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <span>6 Bulan</span>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="12bulan" name="waktu" value="12" class="hidden peer">
                            <label for="12bulan" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <span>1 Tahun</span>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="24bulan" name="waktu" value="24" class="hidden peer">
                            <label for="24bulan" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <span>2 Tahun</span>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="60bulan" name="waktu" value="60" class="hidden peer">
                            <label for="60bulan" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <span>5 Tahun</span>
                            </label>
                        </li>
                    </ul>
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">atau Pilih Tanggal Lainnya</label>   
                    <div class="relative w-full"> 
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"> 
                            <svg aria-hidden="true" class="w-full h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg> 
                        </div> 
                        <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date"> 
                    </div>
                </div> 
            </div>
            <div class="pt-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Alamat Email</label> 
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required> 
            </div>  
        </div>

        <div class="me-8 m-8">
            <div>
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Momen yang Anda Ingin Kirimkan</label> 
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6"> 
                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg> 
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p> 
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p> 
                </div> 
                <input id="dropzone-file" type="file" class="hidden" /> 
                </label>
            </div>

            <div>
                <img src="{{ asset('images_public/bonekaUngu.png') }}" class="h-auto max-w-lg mx-auto" src="/docs/images/examples/image-1@2x.jpg" alt="Avatar Unyu">
            </div>   
        </div>
    </div>
    <div class="text-center mb-20"> 
        <button class="text-white bg-[#0A1A35] hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirimkan Ke Masa Depan</button> 
    </div>  
</form>

@endsection