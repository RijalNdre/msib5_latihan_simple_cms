<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

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
    return view('welcome')->with([
        'beritas'=> Berita::all(),
    ]);
});

//Login dan Register
Route::get('/login', [LoginController::class, 'index'])->name('login-page')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login-validate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout-destroy');
Route::get('/register', [RegisterController::class, 'index'])->name('register-page')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->name('register-store');

//Dashboard
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard-page')->middleware('auth');
Route::resource('/berita', BeritaController::class)->middleware('auth');
// Route::get('/tambah-berita', function(){
//     return view('dashboard.berita.tambah-berita.index');
// })->middleware('auth');
// Route::get('/edit-berita', function(){
//     return view('dashboard.berita.edit-berita.index');
// })->middleware('auth');