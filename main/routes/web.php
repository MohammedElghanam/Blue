<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HOME.index');
})->name('home');


Route::get('/A propos de nous', function(){
    return view('HOME.A_propos');
})->name('A_propos');
