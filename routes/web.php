<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::delete("/{task}/delete", [TaskController::class, "delete"])->name((".delete"));
Route::get("/{task}/show", [TaskController::class, "show"])->name((".show"));#detalhas da tarefa (view)
Route::get('/create', [TaskController::class, "create"])->name(".create");#criar tarefa(view)
Route::put('/{task}', [TaskController::class, "update"])->name(".update");#atualizar tarefa
Route::get('/{task}', [TaskController::class, "edit"])->name(".edit");#editar tarefa(view)
Route::get('/', [TaskController::class, "index"])->name(".index"); #lista de tarfas(view)
Route::post('/', [TaskController::class, "store"])->name(".store");#adicionar tarefa(banco)
