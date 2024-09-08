<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::paginate();
        return view('index', compact("tasks"));
    }

    public function create() {
        return view("create");
    }

    public function store(StoreTaskRequest $request) {

        Task::create($request->all());

        return redirect()
        ->route(".index")
        ->with("success", "Tarefa criada com sucesso");
    }

    public function edit(string $id) {
    
        if (!$task = Task::find($id)) {
            return redirect()->route('.index')->with("message", "Tarefa não encontrada");
        }


        return view("edit", compact("task"));
    }

    public function update(Request $request, string $id) {

        if (!$task = Task::find($id)) {
            return back()->with("message", "Tarefa não encontrada");
        }   

        $task->update(request($request->all()));

        return redirect()->route(".index")->with("success", "Tarefa editada com suceso");
    }

    public function show(string $id) {
        if (!$task = Task::find($id)) {
            return back()->with("message", "Tarefa não encontrada");
        }   

        return view("show", compact("task"));
    }

    public function delete(string $id) {
        if (!$task = Task::find($id)) {
            return back()->with("message", "Tarefa não encontrada");
        }   

        $task->delete();

        return redirect()->route(".index")->with("success", "Tarefa removida com suceso");
    }
}
