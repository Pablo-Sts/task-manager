<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::paginate();#carrega as tarefas usando paginção
        return view('index', compact("tasks"));
    }

    public function create() {
        return view("create");
    }

    public function store(StoreTaskRequest $request) {

        Task::create($request->validated());

        return redirect()
        ->route(".index")
        ->with("success", "Tarefa criada com sucesso");
    }

    public function edit(string $id) {
        #verifica se a tarefa exite antes de envia-lá para a view
        if (!$task = Task::find($id)) {
            return redirect()->route('.index')->with("message", "Tarefa não encontrada");
        }


        return view("edit", compact("task"));
    }

    public function update(UpdateTaskRequest $request, string $id) {

        #verifica se a tarefa exite antes de altera-lá
        if (!$task = Task::find($id)) {
            return back()->with("message", "Tarefa não encontrada");
        }   
        

        $task->update($request->only(
            "title",
            "description",
            "status",
            "updated_at"
        ));

        return redirect()->route(".index")->with("success", "Tarefa editada com suceso");
    }

    public function show(string $id) {
        #verifica se a tarefa exite antes de envia-lá para a view
        if (!$task = Task::find($id)) {
            return back()->with("message", "Tarefa não encontrada");
        }   

        return view("show", compact("task"));
    }

    public function delete(string $id) {

        #verifica se a tarefa exite antes de deleta-lá
        if (!$task = Task::find($id)) {
            return back()->with("message", "Tarefa não encontrada");
        }   

        $task->delete();

        return redirect()->route(".index")->with("success", "Tarefa removida com suceso");
    }
}
