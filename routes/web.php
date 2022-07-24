<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ShopController;
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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/pets', function () {
    return view('pets.index');
})->name('pets'); */
Route::middleware(['auth:sanctum','verified'])->get('pets',[PetController::class,'index'])->name('pets');
Route::middleware(['auth:sanctum','verified'])->get('add_pet',[PetController::class,'create'])->name('add_pet');
Route::middleware(['auth:sanctum','verified'])->post('store_pet',[PetController::class,'store'])->name('store_pet');
Route::middleware(['auth:sanctum','verified'])->post('delete_pet',[PetController::class,'delete'])->name('delete_pet');
Route::middleware(['auth:sanctum','verified'])->post('edit_pet',[PetController::class,'edit'])->name('edit_pet');
Route::middleware(['auth:sanctum','verified'])->post('update_pet',[PetController::class,'update'])->name('update_pet');

Route::middleware(['auth:sanctum','verified'])->get('breeds',[BreedController::class,'index'])->name('breeds');
Route::middleware(['auth:sanctum','verified'])->get('add_breed',[BreedController::class,'create'])->name('add_breed');
Route::middleware(['auth:sanctum','verified'])->post('delete_breed',[BreedController::class,'delete'])->name('delete_breed');
Route::middleware(['auth:sanctum','verified'])->post('edit_breed',[BreedController::class,'edit'])->name('edit_breed');
Route::middleware(['auth:sanctum','verified'])->post('store_breed',[BreedController::class,'store'])->name('store_breed');
Route::middleware(['auth:sanctum','verified'])->post('update_breed',[BreedController::class,'update'])->name('update_breed');


Route::middleware(['auth:sanctum','verified'])->get('customers',[CustomerController::class,'index'])->name('customers');
Route::middleware(['auth:sanctum','verified'])->get('add_customer',[CustomerController::class,'create'])->name('add_customer');
Route::middleware(['auth:sanctum','verified'])->post('store_customer',[CustomerController::class,'store'])->name('store_customer');
Route::middleware(['auth:sanctum','verified'])->post('delete_customer',[CustomerController::class,'delete'])->name('delete_customer');
Route::middleware(['auth:sanctum','verified'])->post('edit_customer',[CustomerController::class,'edit'])->name('edit_customer');
Route::middleware(['auth:sanctum','verified'])->post('update_customer',[CustomerController::class,'update'])->name('update_customer');
Route::middleware(['auth:sanctum','verified'])->get('shops',[ShopController::class,'index'])->name('shops');