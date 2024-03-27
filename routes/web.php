<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\logins;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::delete('support/{id}',[SupportController::class, 'destroy'])-> name('support.destroy');


// Route::post('/support',[SupportController::class, 'store'])->name('support.store');

// Route::put('/support/{id}',[SupportController::class,'update'])->name('support.update');

// Route::get('/support/{id}/edit',[SupportController::class, 'edit'])->name('support.edit');

// Route::get('/support/create',[SupportController::class, 'create'])->name('support.create');

// Route::get('/support/{id}',[SupportController::class, 'show'])->name('support.show');

// Route::get('/support',[SupportController::class, 'index'])->name('support.index');

// Route::get('/support/create',[SupportController::class, 'create'])->name('support.create');

Route::get('/logins',action: [logins::class, 'index'])->name('logins.index');

Route::get('/logins/create',action: [logins::class, 'create'])->name('logins.create');

Route::post('/logins',action: [logins::class, 'store'])->name('logins.store');

Route::get('/candidatos',action: [logins::class,'lista']) -> name('logins.lista');

Route::get('/logins/{candidato}',action: [logins::class, 'show'])->name( 'logins.show');

Route::get('/logins/{candidato}/edit',action: [logins::class, 'edit'])->name('logins.edit');

Route::put('/logins/{candidato}',action: [logins::class, 'update'])->name('logins.update');

Route::delete('/logins/{candidato}/delete',action: [logins::class, 'destroy'])->name('logins.destroy');