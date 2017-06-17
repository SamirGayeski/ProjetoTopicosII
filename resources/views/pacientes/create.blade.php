@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Paciente</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'pacientes.store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dataNascimento', 'Data de Nascimento:') !!}
            {!! Form::date('dataNascimento', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::select('sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'), 'Masculino', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefoneCelular', 'Telefone Celular:') !!}
            {!! Form::text('telefoneCelular', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefoneResidencial', 'Telefone Residencial:') !!}
            {!! Form::text('telefoneResidencial', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço:') !!}
            {!! Form::text('endereco', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('numero', 'Número:') !!}
            {!! Form::text('numero', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('complemento', 'Complemento:') !!}
            {!! Form::text('complemento', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cidade', 'Cidade:') !!}
            {!! Form::text('cidade', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estado', 'Estado:') !!}
            {!! Form::text('estado', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rg', 'RG:') !!}
            {!! Form::text('rg', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estadoCivil', 'Estado Civil:') !!}
            {!! Form::select('estadoCivil', array('Solteiro (a)' => 'Solteiro (a)',
                                                  'Casado (a)' => 'Casado (a)',
                                                  'Viúvo (a)' => 'Viúvo (a)',
                                                  'Divorciado (a)' => 'Divorciado (a)',
                                                  'Separado (a)' => 'Separado (a)'),
                                                  'Solteiro (a)', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('profissao', 'Profissão:') !!}
            {!! Form::text('profissao', null, ['class'=>'form-control']) !!}
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
            {!! Form::label('cns', 'CNS:') !!}
            {!! Form::text('cns', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('convenio_id', 'Convênio:') !!}
            {{ Form::select('convenio_id', \App\Convenio::orderBy('nome')->pluck('nome','id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('plano', 'Plano:') !!}
            {!! Form::text('plano', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('numeroCarteirinha', 'Número Carteirinha:') !!}
            {!! Form::text('numeroCarteirinha', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('validade', 'Validade:') !!}
            {!! Form::date('validade', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('acomodacao', 'Acomodação:') !!}
            {!! Form::text('acomodacao', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar paciente', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection