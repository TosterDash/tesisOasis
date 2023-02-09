<?php

use App\Http\Controllers\googleController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\pedidoController;
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

Route::get('/', indexController::class)->name("index");

Route::get('/menu', menuController::class)->name("menu");

Route::get('/login', loginController::class)->name("login");

Route::get('/pedido', pedidoController::class)->name("pedidos");

Route::get('/registro', registroController::class)->name("registro");

Route::get('auth/google/redirect', [googleController::class,'redirect'])->name("redirect");
Route::get('auth/google/callback', [googleController::class,'callback'])->name("callback");
Route::post('logout',[googleController::class,'googleLogout'])->name("logout");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
