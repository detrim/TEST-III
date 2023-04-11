<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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



Route::get('/',[AuthController::class, 'login']);
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::get('/register',[AuthController::class, 'register']);
Route::post('/prosesregister',[AuthController::class, 'prosesregister']);
Route::post('/proseslogin',[AuthController::class, 'proseslogin']);
Route::get('/logout',[AuthController::class, 'logout']);

Route::group(['middleware' => ['auth','CheckLevel:admin']], function () {
    Route::prefix('admin')->group(function () {
        route::get('/dashboard', [DashboardController::class, 'index_admin']);

    });
});
Route::group(['middleware' => ['auth','CheckLevel:user']], function () {
    Route::prefix('user')->group(function () {
        route::get('/dashboard', [DashboardController::class, 'index_user']);
        route::get('/{email}/profil', [DashboardController::class, 'profil_user']);
        route::post('/profil/{email}/post', [DashboardController::class, 'profil_post']);
        route::get('/{email}/pengalaman', [DashboardController::class, 'pengalaman_user']);
        route::post('/pengalaman/{email}/post', [DashboardController::class, 'pengalaman_post']);
    });
});