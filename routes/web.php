<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale() ,
'middleware'=>[ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){

Route::get('/', function () {
    return view('welcome');
});





Route::get('/dash', function () {
    return view('dash.index');
})->middleware('can:check-admin')->name('dash.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['prefix' => ''], function () {
            
   
    // Route::get('/applicant/create', [EnrollController::class,'create'])->name('applicants.create');
    Route::post('/message/store', [MessageController::class,'store'])->name('messages.store');
    Route::get('/message/create', [MessageController::class,'create'])->name('messages.create');
    Route::get('/message/index', [MessageController::class,'index'])->name('messages.index');

   // Route::get('/message/create', App\Livewire\Messages\CreateMessage::class)->name('messages.create');
});

});