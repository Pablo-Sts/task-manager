<?php

namespace App\Http\Controllers;

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

    public function store(Request $request) {

        Task::create($request->all());

        return redirect()->route(".index");
    }
}
