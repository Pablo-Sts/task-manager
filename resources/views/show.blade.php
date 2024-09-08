@extends('layout.app')
@section("title", "Detalhes da tarefa")

@section("content")

<nav class="navbar p-3">
    <div class="container-fluid">
        <a href="{{ route('.index') }}" class="navbar-brand btn btn-primary text-light">Lista de Tarefas</a>
    </div>
</nav>

<div class="container-fluid p-3 text-light">
    
    <div class="container-fluid text-center">
        <h1>Detalhes da tarefa: {{ $task->title }}</h1>
    </div>

    <div class="p-3">    
        <ul class="list-group">
            <li  class="list-group-item list-group-item-info text-dark fs-5 p-3">Título: {{ $task->title }}</li>
            <li class="list-group-item list-group-item-primary text-dark fs-5 p-3">Descrição: {{ $task->description }}</li>
            @if ($task->status == "Pending")
                <li class="list-group-item list-group-item-info text-dark fs-5 p-3">Status: Pendente</li>
            @else
                <li class="list-group-item list-group-item-info text-dark fs-5 p-3">Status: Concluída</li>
            @endif
            <li class="list-group-item list-group-item-primary text-dark fs-5 p-3">Criada em: {{ $task->created_at = date("d/m/Y") }}</li>
            <li class="list-group-item list-group-item-info text-dark fs-5 p-3">Útima edição: {{ $task->updated_at = date("d/m/Y") }}</li>
        </ul>
    </div>
    
    <form action="{{ route('.delete', $task->id) }}" method="post">
        @csrf
        @method("delete")
        <button type="submit" class="btn btn-danger fs-5">Remover Tarefa</button>
    </form>
</div>

@endsection