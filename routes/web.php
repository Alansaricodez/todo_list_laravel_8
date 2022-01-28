<?php

use App\Http\Controllers\TaskController;
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


Route::get('/', [TaskController::class, 'index']);
Route::get('/create', [TaskController::class, 'createTask'])->name('createTask');
Route::post('/addTask', [TaskController::class, 'addTask'])->name('addTask');
Route::post('/completed/{id}', [TaskController::class, 'setCompleted'])->name('setCompleted');
Route::post('/deleteTask/{id}', [TaskController::class, 'deleteTask'])->name('deleteTask');
Route::get('/edit/{id}', [TaskController::class, 'editTask'])->name('editTask');
Route::patch('/updateTask/{id}', [TaskController::class, 'updateTask'])->name('updateTask');
