<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/create', [TaskController::class, "create"])->name(".create");
Route::put('/{task}', [TaskController::class, "update"])->name(".update");
Route::get('/{task}', [TaskController::class, "edit"])->name(".edit");
Route::get('/', [TaskController::class, "index"])->name(".index");
Route::post('/', [TaskController::class, "store"])->name(".store");
