<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Models\Category;
use App\Models\Employee;
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

Route::get('/', [EmployeeController::class, 'index'])->name('show.index');

Route::get('create', [EmployeeController::class, 'create'])->name('show.create');
Route::post('create', [EmployeeController::class, 'store'])->name('store');

Route::get('edit/{id}',[EmployeeController::class,'edit'])->name('show.edit');
Route::post('edit/{id}',[EmployeeController::class,'update'])->name('update');

Route::get('delete/{id}',[EmployeeController::class,'destroy'])->name('delete');

Route::get('category',[CategoryController::class,'create'])->name('create.category');
Route::post('category',[CategoryController::class,'store'])->name('store');

Route::get('catedelete/{id}',[CategoryController::class,'destroy'])->name('catedelete');

Route::get('/search/',[EmployeeController::class,'search'])->name('search');

