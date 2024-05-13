<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home'])->name('home');

Route::view('/adduserpage','adduser');
Route::post('/adduser',[HomeController::class,'adduser'])->name('adduser');

Route::get('/getuser/{id}',[HomeController::class,'getuser'])->name('getuser');
Route::post('/update/{id}',[HomeController::class,'updateuser'])->name('update');

Route::get('/deleteuser/{id}',[HomeController::class,'deleteuser'])->name('deleteuser');
