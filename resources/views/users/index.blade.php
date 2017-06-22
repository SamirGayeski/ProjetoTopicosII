@extends('app')

@section('content')
    <div class="container">
        <h1>Usuários</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Data Criação</th>
                <th>Situação</th>
                <th>Tipo</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $usr)
                <tr>
                    <td>{{$usr->nome}}</td>
                    <td>{{$usr->email}}</td>
                    <td>{{$usr->telefone}}</td>
                    <td>{{$usr->sexo}}</td>
                    <td>{{$usr->dataCriacao}}</td>
                    <td>{{$usr->situacao}}</td>
                    <td>{{$usr->tipoUsuario}}</td>
                    <td>
                        <a href="{{ route('users.edit', ['id'=>$usr->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('users.destroy', ['id'=>$usr->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('users.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Usuário</a>
    </div>
@endsection