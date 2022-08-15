<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::view('/powergrid', 'powergrid-demo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard2', function () {
    return view('dashboard22');
})->middleware(['auth'])->name('dashboard2');

Route::get('/test',function (){
    return view('test');
});
require __DIR__.'/auth.php';
