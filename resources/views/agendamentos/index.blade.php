@extends('app')

@section('content')
    <div class="container">
        <h1>Agendamentos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Paciente</th>
                <th>Profissional</th>
                <th>Procedimento</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Status</th>
                <th>Observações</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($agendamentos as $agen)
                <tr>
                    <td>{{$agen->paciente->nome}}</td>
                    <td>{{$agen->usuario->nome}}</td>
                    <td>{{$agen->procedimento->nome}}</td>
                    <td>{{$agen->data}}</td>
                    <td>{{$agen->horario}}</td>
                    <td>{{$agen->status}}</td>
                    <td>{{$agen->observacoes}}</td>
                    <td>
                        <a href="{{ route('agendamentos.edit', ['id'=>$agen->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('agendamentos.destroy', ['id'=>$agen->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('agendamentos.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Agendamento</a>
    </div>
@endsection