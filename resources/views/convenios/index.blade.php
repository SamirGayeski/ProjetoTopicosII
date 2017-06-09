@extends('app')

@section('content')
    <div class="container">
        <h1>Convênios</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Número de Registro</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($convenios as $conv)
                <tr>
                    <td>{{$conv->nome}}</td>
                    <td>{{$conv->numeroRegistro}}</td>
                    <td>
                        <a href="{{ route('convenios.edit', ['id'=>$conv->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('convenios.destroy', ['id'=>$conv->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection