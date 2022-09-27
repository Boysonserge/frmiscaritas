<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::resource('blog', BlogController::class);

Route::get('lang/{lang}',[LocalizationController::class,'setLang'])->name('lang');

Route::post('sendcomment',[BlogController::class,'sendComment'])->name('sendcomment');






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
