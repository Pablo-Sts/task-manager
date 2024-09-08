@extends('layout.app')
@section("title", "Editar Tarefa")

@section("content")

<nav class="navbar p-3">
    <div class="container-fluid">
        <a href="{{ route('.index') }}" class="navbar-brand btn btn-primary text-light">Lista de Tarefas</a>
    </div>
</nav>

<x-alert/>

<div class="container-fluid p-5">

    <div class="text-center">
        <h1 class="text-light">Editar Tarefa: {{ $task->title }}</h1>
    </div>

    <form action="{{route('.update', $task->id)}}" method="post">
        @csrf()
        @method("put")
        <div class="mb-3">
            <label for="title" class="form-label text-light fs-5">Título</label>
            <input class="form-control" type="text" name="title" placeholder="Título" value="{{ $task->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-light fs-5">Descrição</label>
            <input class="form-control" type="text" name="description" placeholder="Descrição" value="{{ $task->description }}">
        </div>
        <input type="text" name="status" value="={{ $task->status }}" hidden>
        <input type="text" name="created_at" value="{{ $task->created_at }}" hidden>
        <input type="text" name="updated_at" value="{{ now() }}" hidden>
        <button type="submit" class="btn btn-success fs-5">Editar Tarefa</button>
    </form>
</div>

@endsection