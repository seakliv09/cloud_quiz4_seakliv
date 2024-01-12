<?php

use App\Livewire\Form\Upload;
use App\Livewire\Result;
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
    return view('layouts.home');
})->name('home');

Route::get('/form-upload',Upload::class)->name('form-upload');
Route::get('/result',Result::class)->name('view-result');