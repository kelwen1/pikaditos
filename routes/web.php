<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/menu/{slug}', [PageController::class, 'menuSeccion'])->name('menu.seccion')->where('slug', 'picadas|paquetazo|comidas-rapidas|carnes|coctel-cremosos|coctel|coctel-refrescante|bebidas|sodas-saborizadas|granizados|micheladas|jugos-leche');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [PageController::class, 'enviarContacto'])->name('contacto.enviar');
