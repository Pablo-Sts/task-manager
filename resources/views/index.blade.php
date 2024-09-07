<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Tarefas</h1>

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
</body>
</html>