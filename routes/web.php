<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\PrintPakController;
use App\Http\Controllers\ProfileController;

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

// Route ini hanya dapat di akses ketia user belum melakukan login
Route::middleware(['guest'])->group(function () {

  Route::get('/', function () {
    return redirect('/login');
  });

  // Login
  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'authenticate']);

  // Register
  Route::get('/register', [RegisterController::class, 'index']);
  Route::post('/register', [RegisterController::class, 'store']);
});

// Route ini hanya dapat diakses ketika user telah melakukan login
Route::middleware(['auth'])->group(function () {

  // Logout
  Route::post('/logout', [LogOutController::class, 'logout']);

  // Dashboard
  Route::get('/dashboard', [DashboardController::class, 'index']);

  // Profile
  Route::post('/profile', [ProfileController::class, 'store']);

  // Print PAK
  Route::get('/print-pak', [PrintPakController::class, 'index']);
});
