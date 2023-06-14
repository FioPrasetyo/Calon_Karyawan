<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/store',[BiodataController::class,'store'])->name('store');
    Route::get('/simpan',[BiodataController::class,'create'])->name('create');
    // Route::post('/store', 'BiodataController@simpanData');
    Route::get('/dashboard/{id}/edit',[BiodataController::class,'edit']);
    Route::put('/dashboard/{id}',[BiodataController::class,'update']);
    Route::delete('/dashboard/{id}',[BiodataController::class,'destroy']);
});



//register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');


//route login
Route::post('/login',[LoginController::class,'authen']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/logout',[LoginController::class,'logout']);


// Route::middleware(['auth'])->group(function(){

//     //route admin mulai
    // Route::get('/admin/dashboard', function () {
    //     return view('admin.main-dashboard');
    // });
    
    // Route::get('/admin/user', function () {
    //     return view('admin.user');
    // });

// });
require __DIR__.'/auth.php';
