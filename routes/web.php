<?php

use App\Http\Controllers\AnimalController;
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

Route::get("/", [AnimalController::class, "index"]);
Route::get("/create", [AnimalController::class, "create"]);
Route::post("/store-animal", [AnimalController::class, "store"]);
Route::get("/show-animal/{id}", [AnimalController::class, "show"]);
Route::put("/update-animal/{id}", [AnimalController::class, "update"]);
Route::get("/edit-animal/{id}", [AnimalController::class, "edit"]);
Route::delete("/delete-animal/{id}", [AnimalController::class, "destroy"]);

