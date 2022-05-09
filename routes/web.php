<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
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

Route::get('todos', [TodoController::class, 'index']);

Route::get('show/{todo}', [TodoController::class, 'show']);

Route::get('create', [TodoController::class, 'create']);

Route::post('store', [TodoController::class, 'store']);

Route::get('edit/{todo}', [TodoController::class, 'edit']);

Route::post('update/{todo}', [TodoController::class, 'update']);

Route::get('delete/{todo}', [TodoController::class, 'delete']);

Route::get('complete/{todo}', [TodoController::class, 'complete']);