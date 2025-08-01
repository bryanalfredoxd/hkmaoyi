<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

Route::get('/producto-ideal', function () {
    return view('producto_ideal');
})->name('producto_ideal');

Route::get('/ferias', function () {
    return view('ferias');
})->name('ferias');

Route::get('/proveedores', function () {
    return view('proveedores');
})->name('proveedores');

Route::get('/mercado-futian', function () {
    return view('mercado_futian');
})->name('mercado_futian');

Route::get('/app-futian', function () {
    return view('app_futian');
})->name('app_futian');

Route::get('/en-vivo', function () {
    return view('envivo');
})->name('envivo');

use App\Http\Controllers\TransporteController;

Route::post('/enviar-cotizacion', [TransporteController::class, 'enviar'])
    ->name('enviar.cotizacion');

use App\Http\Controllers\VisitasController;
Route::post('/enviar-visitas', [VisitasController::class, 'enviar'])->name('enviar.visitas');

use App\Http\Controllers\AuditoriaController;
Route::post('/enviar-auditoria', [AuditoriaController::class, 'enviar'])->name('enviar.auditoria');

