@extends('layout.app')
@section("title", "Gerenciador de Tarefas")

@section("content")

    <h1>Tarefas</h1>

    <x-alert/>

    <a href="{{ route('.create') }}">Nova Tarefa</a>

    <table>
        <thead>
            <tr>
                <th>Status</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <a href="{{ route('.edit', $task->id) }}">Edit</a>
                        <a href="{{ route('.show', $task->id) }}">Detalhes</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhuma tarefa encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $tasks->links() }}

@endsection