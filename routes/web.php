<?php

use App\Livewire\ContactUs;
use App\Livewire\CreateContactUs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('contact-us', ContactUs::class)->name('contact-us');

Route::get('filament-contact-us', CreateContactUs::class)->name('filament-contact-us');
