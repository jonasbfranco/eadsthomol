<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgetPasswordManager;
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
    return view('home');
})->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'register_action'])->name('register_action');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/forget-password', [ForgetPasswordManager::class, 'forgetPassword'])->name('forget.password');
Route::post('/forget-password', [ForgetPasswordManager::class, 'forgetPasswordPost'])->name('forget.password.post');
Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])->name('reset.password.post');



// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->name('forgot-password');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');;


