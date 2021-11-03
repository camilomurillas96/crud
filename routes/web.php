<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud;
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

Route::get('/', [crud::class, 'index'])->name('crud');
route::get('/creacion', [crud::class, 'create'])->name('producto');
route::put('/creacion}', [crud::class, 'store'])->name('producto.store');

route::get('mostrar', [crud::class, 'mostrar'])->name('mostrar');
route::get('mostrar/{id}', [crud::class, 'unico'])->name('unico');