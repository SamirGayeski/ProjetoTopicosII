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
                <th>Convênio</th>
                <th>Ação</th>
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
                    <td>{{$pac->convenio->nome}}</td>
                    <td>
                        <a href="{{ route('pacientes.edit', ['id'=>$pac->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('pacientes.destroy', ['id'=>$pac->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection