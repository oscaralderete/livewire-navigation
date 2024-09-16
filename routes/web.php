<?php

use App\Livewire\About;
use App\Livewire\Blog;
use App\Livewire\Contact;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/blog', Blog::class);
Route::get('/contact', Contact::class);
