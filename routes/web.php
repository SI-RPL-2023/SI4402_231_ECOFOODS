<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/cekregis', [UserController::class, 'cekregis'])->name('cekregis');
Route::post('/ceklogin', [UserController::class, 'ceklogin'])->name('ceklogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/updateprof', [UserController::class, 'updateprof'])->name('updateprof');
Route::get('/adminlogin', [UserController::class, 'adminlogin'])->name('adminlogin');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/menu', [UserController::class, 'menu'])->name('menu');
Route::get('/checkout/{id}', [UserController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [UserController::class, 'inputmakanan'])->name('inputmakanan');
Route::get('/transaction', [UserController::class, 'transaction'])->name('transaction');
Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');
Route::get('/succes', [UserController::class, 'succes'])->name('succes');

Route::post('/cekloginadmin', [AdminController::class, 'cekloginadmin'])->name('cekloginadmin');
Route::get('/Admin/homeadmin', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::get('/Admin/tableadmin', [AdminController::class, 'tableadmin'])->name('tableadmin');
Route::get('/Admin/admininput', [AdminController::class, 'inputadmin'])->name('inputadmin');
Route::post('/Admin/admininput', [AdminController::class, 'cekinput'])->name('cekinput');
Route::get('/Admin/validateadmin', [AdminController::class, 'validateadmin'])->name('validate');
Route::get('/Admin/konfirmasi/{id}', [AdminController::class, 'konfirmasi'])->name('konfirmasi');
Route::put('/Admin/konfirmasi/{id}', [AdminController::class, 'konfirmasipesanan'])->name('konfirmasipesanan');
Route::delete('/Admin/tableadmin/{id}', [AdminController::class, 'deletemakanan'])->name('deletemakanan');