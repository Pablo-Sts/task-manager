@extends('layout.app')
@section("title", "Gerenciador de Tarefas")

@section("content")

    <h1>Tarefas</h1>

    @if (session()->has("success"))
        {{ session("success") }}
    @endif

    <a href="{{ route('.create') }}">Nova Tarefa</a>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Data Criação</th>
                <th>Data Última Edição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>{{ $task->updated_at }}</td>
                    <td>-</td>
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