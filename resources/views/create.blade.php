@extends('layout.app')
@section("title", "Nova Tarefa")

@section("content")

<nav class="navbar p-3">
    <div class="container-fluid">
        <a href="{{ route('.index') }}" class="navbar-brand btn btn-primary text-light">Lista de Tarefas</a>
    </div>
</nav>

<x-alert/>
<div class="container-fluid p-5">
    
    <div class="text-center">
        <h1 class="text-light">Nova Tarefa</h1>
    </div>

    <form action="{{route('.store')}}" method="post">
        @csrf()
        <div class="mb-3">
            <label for="title" class="form-label text-light fs-5">Título</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Título" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-light fs-5">Descrição</label>
            <input class="form-control" type="text" name="description" placeholder="Descrição" value="{{ old('description') }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label text-light fs-5">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="Pending">Pendente</option>
                <option value="Finished">Concluída</option>
            </select>
        </div>
        <input type="text" name="created_at" value="{{ now() }}" hidden>
        <button type="submit" class="btn btn-success fs-5">Criar Tarefa</button>
    </form>
</div>

@endsection