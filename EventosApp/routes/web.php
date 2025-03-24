<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Auth;

// Página de bienvenida (página principal de la app)
Route::get('/', function () {
    return view('welcome');
});

// Rutas de eventos accesibles por todos, incluso no registrados
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');

// Rutas protegidas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    // Rutas relacionadas con la creación, edición y eliminación de eventos
    Route::get('/create', [EventoController::class, 'create'])->name('eventos.create');
    Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
    Route::get('/update/{id}', [EventoController::class, 'edit'])->name('eventos.edit');
    Route::put('/eventos/{id}', [EventoController::class, 'update'])->name('eventos.update');
    Route::delete('/eventos/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');
});

// Rutas de autenticación, login, y registro
Auth::routes(); // Esta línea incluye las rutas de login, registro y logout automáticamente

// Ruta después de login (redirige a home o a eventos según la configuración en los controladores)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
