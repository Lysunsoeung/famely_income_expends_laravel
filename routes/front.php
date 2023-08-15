<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

Route::get('/',[FrontPageController::class,'index'])->name('welcome-page');
// Route::get('/about',[FrontPageController::class,'about']);
Route::get('/blog',[FrontPageController::class,'blog']);
Route::get('/gallery',[FrontPageController::class,'gallery']);
Route::get('/contact',[FrontPageController::class,'contact']);
