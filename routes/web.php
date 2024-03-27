<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\loguins;
use App\Models\Support;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::delete('support/{id}',[SupportController::class, 'destroy'])-> name('support.destroy');


Route::post('/support',[SupportController::class, 'store'])->name('support.store');

Route::put('/support/{id}',[SupportController::class,'update'])->name('support.update');

Route::get('/support/{id}/edit',[SupportController::class, 'edit'])->name('support.edit');

Route::get('/support/create',[SupportController::class, 'create'])->name('support.create');

Route::get('/support/{id}',[SupportController::class, 'show'])->name('support.show');

Route::get('/support',[SupportController::class, 'index'])->name('support.index');

Route::get('/support/create',[SupportController::class, 'create'])->name('support.create');

//Route::get('/cadastro',action: [loguins::class, 'index'])->name('cadastro.index');

//Route::get('/cadastro/create',action: [loguins::class, 'create'])->name('cadastro.index');

//Route::post('/cadastro',action: [loguins::class, 'store'])->name('cadastro.store');

//Route::post('/cadastro/{user}',action: [loguins::class, 'show'])->name(  'cadastro.show');

//Route::post('/cadastro/{user}/edit',action: [loguins::class, 'edit'])->name(  'cadastro.edit');

//Route::put('/cadastro/{user}/update',action: [loguins::class, 'update'])->name('cadastro.update');

//Route::delete('/cadastro/users/{user}/delete',action: [loguins::class, 'destroy'])->name('cadastro.destroy');'