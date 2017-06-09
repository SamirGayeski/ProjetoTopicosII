@extends('app')

@section('content')
    <div class="container">
        <h1>Procedimentos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Duração</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($procedimentos as $proc)
                <tr>
                    <td>{{$proc->nome}}</td>
                    <td>{{$proc->duracao}}</td>
                    <td>{{$proc->descricao}}</td>
                    <td>
                        <a href="{{ route('procedimentos.edit', ['id'=>$proc->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('procedimentos.destroy', ['id'=>$proc->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection