<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PaketController;
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




// Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
// Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/register_page', [RegisterController::class, 'index']);
Route::get('/login_page', [LoginController::class, 'index']);
Route::get('/destinasi_page', [DestinasiController::class, 'index']);
Route::get('/paket_page', [PaketController::class, 'index']);
Route::get('/kontak_page', [ContactController::class, 'index']);
Route::get('/maps', [MapsController::class, 'showMap']);
Route::get('/', function () {
    return view('layout/dashboard');
});