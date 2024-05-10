<?php

use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\RakKategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\SirkulasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Http\Middleware\CheckRole;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/role-regist',[UserController::class, 'role'])->name('role');

Route::get('/',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/autentikasi',[LoginController::class,'autenticate'])->name('autenticate')->middleware('guest');
Route::post('/logout',[LoginController::class,'Logout'])->name('logout')->middleware('auth');
Route::get('/home',[LoginController::class,'Home'])->name('home')->middleware('auth');
// Route::get('/hello', function () {
//     return view('blank');
// });

Route::middleware(['auth', 'role:Pengunjung'])->group(function () {
  //nama route
});

Route::middleware(['auth', 'role:Petugas'])->group(function (){
  //nama route
});
