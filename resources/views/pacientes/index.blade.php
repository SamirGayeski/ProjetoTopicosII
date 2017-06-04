@extends('app')

@section('content')
    <div class="container">
        <h1>Pacientes</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Estado Civil</th>
                <th>CPF</th>
                <th>CNS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pacientes as $pac)
                <tr>
                    <td>{{$pac->nome}}</td>
                    <td>{{$pac->dataNascimento}}</td>
                    <td>{{$pac->sexo}}</td>
                    <td>{{$pac->estadoCivil}}</td>
                    <td>{{$pac->cpf}}</td>
                    <td>{{$pac->cns}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection