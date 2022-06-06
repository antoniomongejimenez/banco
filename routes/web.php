<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\RegistroController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('clientes', ClienteController::class);

Route::resource('cuentas', CuentaController::class);

Route::resource('movimientos', MovimientoController::class);

Route::resource('registros', RegistroController::class);

Route::get('/cuentas/{cuenta}/movimientos', [CuentaController::class, 'movimientoscuenta'])
->name('movimientoscuenta');

Route::get('/cuentas/{cuenta}/titulares', [CuentaController::class, 'titulares'])
->name('vertitulares');


Route::get('/cuentas/{cuenta}/verlistadoclientes', [CuentaController::class, 'verlistadoclientes'])
->name('verlistadoclientes');

Route::post('/cuentas/{cuenta}/meter/{cliente}', [CuentaController::class, 'meter'])
->name('meter');

Route::post('/cuentas/{cuenta}/eliminar/{cliente}', [CuentaController::class, 'eliminar'])
->name('eliminar');

require __DIR__.'/auth.php';
