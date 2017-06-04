@extends('app')

@section('content')
    <div class="container">
        <h1>Convênios</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Número de Registro</th>
            </tr>
            </thead>
            <tbody>
            @foreach($convenios as $conv)
                <tr>
                    <td>{{$conv->nome}}</td>
                    <td>{{$conv->numeroRegistro}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection