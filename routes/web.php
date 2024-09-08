<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::delete("/{task}/delete", [TaskController::class, "delete"])->name((".delete"));
Route::get("/{task}/show", [TaskController::class, "show"])->name((".show"));
Route::get('/create', [TaskController::class, "create"])->name(".create");
Route::put('/{task}', [TaskController::class, "update"])->name(".update");
Route::get('/{task}', [TaskController::class, "edit"])->name(".edit");
Route::get('/', [TaskController::class, "index"])->name(".index");
Route::post('/', [TaskController::class, "store"])->name(".store");
