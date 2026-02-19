<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/login', [UsuarioController::class, 'login'])->name('login');
Route::post('/login', [UsuarioController::class, 'verificarLogin'])->name('login.verificar');
Route::post('/logout', [UsuarioController::class, 'logout'])
    ->middleware('verify')
    ->name('logout');
Route::get('/verificar', [UsuarioController::class, 'verificador'])->middleware('verify');
Route::get('/dashboard', [UsuarioController::class, 'dashboard'])->middleware('verify');

Route::middleware('verify')->group(function () {
    Route::resource('productos', ProductoController::class);
});