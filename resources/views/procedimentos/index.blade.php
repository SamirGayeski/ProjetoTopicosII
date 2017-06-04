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
            </tr>
            </thead>
            <tbody>
            @foreach($procedimentos as $proc)
                <tr>
                    <td>{{$proc->nome}}</td>
                    <td>{{$proc->duracao}}</td>
                    <td>{{$proc->descricao}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection