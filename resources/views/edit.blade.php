@extends('layout.app')
@section("title", "Editar Tarefa")

@section("content")

<h1>Tarefa Tarefa  {{ $task->title }}</h1>

<x-alert/>

<form action="{{route('.update', $task->id)}}" method="post">
    @csrf()
    @method("put")
    <input type="text" name="title" placeholder="Título" value="{{ $task->title }}">
    <input type="text" name="description" placeholder="Descrição" value="{{ $task->description }}">
    <input type="text" name="status" value="={{ $task->status }}" hidden>
    <input type="text" name="created_at" value="{{ $task->created_at }}" hidden>
    <input type="text" name="updated_at" value="{{ now() }}" hidden>
    <button type="submit">Editar Tarefa</button>
</form>

@endsection