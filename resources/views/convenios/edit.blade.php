@extends('app')

@section('content')
    <div class="container">
        <h1>Editando convênio: {{$convenio->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => "convenios/$convenio->id/update", 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $convenio->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('numeroRegistro', 'Número do Registro:') !!}
            {!! Form::number('numeroRegistro', $convenio->numeroRegistro, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection