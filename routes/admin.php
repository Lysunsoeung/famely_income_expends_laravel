<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UsersController;
use App\Models\Service;

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:child'])->group(function () {

    Route::get('/child/home', [HomeController::class, 'index'])->name('child.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    //Manage Services
    Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/create', [UsersController::class, 'create'])->name('admin.users.create');


  });

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:parent'])->group(function () {

    Route::get('/parent/home', [HomeController::class, 'parentHome'])->name('parent.home');
});
