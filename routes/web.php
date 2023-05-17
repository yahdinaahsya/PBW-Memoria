<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MomenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KapsulwaktuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/kapsulwaktu', function () {
    return view('kapsulwaktu');
});

Route::post('/kapsulwaktu/input',[KapsulwaktuController::class,'store']);

Route::get('/abadikan', function () {
    return view('abadikan');
});


Route::get('/data', function () {
    return view('dataMomen');
});

Route::get('/random', function () {
    return view('random');
});

Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/getmemori/{tahun}/{bulan}', [MomenController::class, 'getMemoriData']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profil_user', [ProfileController::class, 'show']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //Abadikan Momen
    Route::post('/simpan-momen', [MomenController::class, 'store']);


    //Acak memori
    Route::get('/get-momen',[MomenController::class, 'acak']);
});

require __DIR__.'/auth.php';
