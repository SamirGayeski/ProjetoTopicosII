@extends('app')

@section('content')
    <div class="container">
        <h1>Editando agendamento: {{$agendamento->paciente->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["agendamentos.update", $agendamento->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('paciente_id', 'Paciente:') !!}
            {{ Form::select('paciente_id', \App\Paciente::orderBy('nome')->pluck('nome','id')->toArray(), $agendamento->paciente_id, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('usuario_id', 'Profissional:') !!}
            {{ Form::select('usuario_id', \App\User::orderBy('nome')->pluck('nome','id')->toArray(), $agendamento->usuario_id, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('procedimento_id', 'Procedimento:') !!}
            {{ Form::select('procedimento_id', \App\Procedimento::orderBy('nome')->pluck('nome','id')->toArray(), $agendamento->procedimento_id, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data', $agendamento->data, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('horario', 'Horário:') !!}
            {!! Form::time('horario', $agendamento->horario, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            {!! Form::select('status', array('Agendado' => 'Agendado',
                                                  'Aguardando Atendimento' => 'Aguardando Atendimento',
                                                  'Atendido' => 'Atendido',
                                                  'Cancelado' => 'Cancelado',
                                                  'Confirmado' => 'Confirmado',
                                                  'Não compareceu' => 'Não compareceu',
                                                  'Solicitação de Reagendamento' => 'Solicitação de Reagendamento'),
                                                  $agendamento->status, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('observacoes', 'Observações:') !!}
            {!! Form::textarea('observacoes', $agendamento->observacoes, ['class'=>'form-control', 'rows' => 3]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection