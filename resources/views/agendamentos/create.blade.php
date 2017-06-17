@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Agendamento</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'agendamentos.store']) !!}

        <div class="form-group">
            {!! Form::label('paciente_id', 'Paciente:') !!}
            {{ Form::select('paciente_id', \App\Paciente::orderBy('nome')->pluck('nome','id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('usuario_id', 'Profissional:') !!}
            {{ Form::select('usuario_id', \App\User::orderBy('nome')->pluck('nome','id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('procedimento_id', 'Procedimento:') !!}
            {{ Form::select('procedimento_id', \App\Procedimento::orderBy('nome')->pluck('nome','id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('horario', 'Horário:') !!}
            {!! Form::time('horario', null, ['class'=>'form-control']) !!}
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
                                                  'Agendado', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('observacoes', 'Observações:') !!}
            {!! Form::textarea('observacoes', null, ['class'=>'form-control', 'rows' => 3]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar agendamento', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection