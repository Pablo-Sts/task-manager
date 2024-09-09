@extends('layout.app')
@section("title", "Gerenciador de Tarefas")

@section("content")


<div class="container-fluid p-1 text-center">
    <h1 class="text-light mt-5">Minhas Tarefas</h1>
    
<x-alert/>
    
</div>
<nav class="navbar mb-2">
    <div class="container-fluid">
        <a href="{{ route('.create') }}" class="navbar-brand btn btn-success text-light">Nova Tarefa</a>
    </div>
</nav>


    <div class="table-responsive p-2">      
        <table class="table align-middle table-bordered border-light">
               <caption>Lista de Tarefas</caption>
               <thead class="">
                   <tr>
                       <th scope="colm">Status</th>
                       <th scope="col">Título</th>
                       <th scope="col">Descrição</th>
                       <th scope="col">Ações</th>
                   </tr>
               </thead>
               <tbody class="table-group-divider">
                   @forelse ($tasks as $task)
                   @if ($task->status == "Pending")
                   <tr class="table-warning">
                           <td>
                               <div class="text-danger d-flex gap-2 align-items-center">
                                   <i class="fa-solid fa-clock fs-5"></i>
                                   PENDENTE
                               </div>
                           </td>
                           <td>{{ $task->title }}</td>
                           <td>{{ $task->description }}</td>
                           <td>
                               <div class="d-flex gap-3">
                                   <a href="{{ route('.edit', $task->id) }}"><i class="fa-solid fa-pen fs-5 text-dark"></i></a>
                                   <a href="{{ route('.show', $task->id) }}"><i class="fa-solid fa-list fs-5 text-dark"></i></a>
                               </div>
                           </td>
                       </tr>
                   @else
                       <tr class="table-success">
                           <td>
                               <div class="text-primary gap-2 d-flex align-items-center">
                                   <i class="fa-solid fa-check fs-5"></i>
                                   CONCLUIDA
                               </div>
                           </td>
                           <td>{{ $task->title }}</td>
                           <td>{{ $task->description }}</td>
                           <td>
                               <div class="d-flex gap-3">
                                   <a href="{{ route('.edit', $task->id) }}"><i class="fa-solid fa-pen fs-5 text-dark"></i></a>
                                   <a href="{{ route('.show', $task->id) }}"><i class="fa-solid fa-list fs-5 text-dark"></i></a>
                               </div>
                           </td>
                       </tr>
                   @endif
                   @empty
                       <tr>
                           <td colspan="100">Nenhuma tarefa encontrado</td>
                       </tr>
                   @endforelse
               </tbody>
           </table>
        </div>
        {{ $tasks->links() }}
    

@endsection