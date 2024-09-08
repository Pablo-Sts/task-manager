@extends('layout.app')
@section("title", "Nova Tarefa")

@section("content")

<h1>Nova Tarefa</h1>

<x-alert\>

<form action="{{route('.store')}}" method="post">
    @csrf()
    <input type="text" name="title" placeholder="Título" value="{{ old('title') }}">
    <input type="text" name="description" placeholder="Descrição" value="{{ old('description') }}">
    <select name="status">
        <option value="Pending">Pendente</option>
        <option value="Finished">Concluída</option>
    </select>
    <input type="text" name="created_at" value="{{ now() }}" hidden>
    <button type="submit">Criar Tarefa</button>
</form>

@endsection