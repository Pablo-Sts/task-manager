@extends('layout.app')
@section("title", "Detalhes da tarefa")

@section("content")

<h1>Detalhes da tarefa: {{ $task->title }}</h1>

<ul>
    <li>Título: {{ $task->title }}</li>
    <li>Descrição: {{ $task->description }}</li>
    <li>Status: {{ $task->status }}</li>
    <li>Criada em: {{ $task->created_at }}</li>
    <li>Útima edição: {{ $task->updated_at }}</li>
</ul>

<form action="{{ route('.delete', $task->id) }}" method="post">
    @csrf
    @method("delete")
    <button type="submit">Remover Tarefa</button>
</form>

@endsection