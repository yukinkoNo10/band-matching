<?php

use App\Http\Controllers\MypageController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\UsersController;
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

//トップ
Route::get('/', [UsersController::class, 'index'])->name('users.index');

//会員登録
Route::get('/users/register', [UsersController::class, 'create'])->name('users.create');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');

//ログイン関連
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//マイページ
Route::get('/mypage/{id}', [MypageController::class, 'index'])->name('mypage.index');

