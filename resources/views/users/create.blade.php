@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Usuário</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'users.store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('login', 'Login:') !!}
            {!! Form::text('login', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Senha:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('situacao', 'Situação:') !!}
            <br/>
            <label class="checkbox-inline">
                {!! Form::checkbox('situacao', 'Ativo', true) !!}
                Ativo</label>
            <label class="checkbox-inline">
                {!! Form::checkbox('situacao', 'Inativo') !!}
                Inativo</label>
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::select('sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'), 'Masculino', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dataCriacao', 'Data Criação:') !!}
            {!! Form::date('dataCriacao', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipoUsuario', 'Tipo do Usuário:') !!}
            {!! Form::select('tipoUsuario', array('Administrador' => 'Administrador', 'Recepcionista' => 'Recepcionista'), 'Administrador', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar usuário', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection