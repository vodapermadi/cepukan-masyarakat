<?php

use App\Http\Livewire\Pengaduan;
use App\Http\Livewire\Tanggapan;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('/pengaduan',Pengaduan::class)->middleware('auth');
route::get('/tanggapan',Tanggapan::class)->middleware('auth');
