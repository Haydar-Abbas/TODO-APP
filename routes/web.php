<?php

use App\Http\Controllers\TodoController;
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

Route::get('todos', [TodoController::class, 'index'])->name('todos');

Route::get('show/{todo}', [TodoController::class, 'show'])->name('show');

Route::get('create', [TodoController::class, 'create'])->name('create');

Route::post('store', [TodoController::class, 'store'])->name('store');

Route::get('edit/{todo}', [TodoController::class, 'edit'])->name('edit');

Route::post('update/{todo}', [TodoController::class, 'update'])->name('update');

Route::get('delete/{todo}', [TodoController::class, 'delete'])->name('delete');

Route::get('complete/{todo}', [TodoController::class, 'complete'])->name('complete');

Route::resource('todos', TodoController::class);
