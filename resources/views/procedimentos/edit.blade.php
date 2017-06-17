@extends('app')

@section('content')
    <div class="container">
        <h1>Editando procedimento: {{$procedimento->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["procedimentos.update", $procedimento->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $procedimento->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('duracao', 'Duração:') !!}
            {!! Form::text('duracao', $procedimento->duracao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::text('descricao', $procedimento->descricao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection