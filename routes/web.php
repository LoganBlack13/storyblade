<?php

use App\Http\Controllers\StoryBladeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/storyblade', [StoryBladeController::class,'index'])->name('storyblade');