@extends('app')

@section('content')
    <div class="container">
        <h1>Editando paciente: {{$paciente->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["pacientes.update", $paciente->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $paciente->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dataNascimento', 'Data de Nascimento:') !!}
            {!! Form::date('dataNascimento', $paciente->dataNascimento, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::select('sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'), $paciente->sexo, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $paciente->email, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefoneCelular', 'Telefone Celular:') !!}
            {!! Form::text('telefoneCelular', $paciente->telefoneCelular, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefoneResidencial', 'Telefone Residencial:') !!}
            {!! Form::text('telefoneResidencial', $paciente->telefoneResidencial, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço:') !!}
            {!! Form::text('endereco', $paciente->endereco, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', $paciente->bairro, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('numero', 'Número:') !!}
            {!! Form::text('numero', $paciente->numero, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('complemento', 'Complemento:') !!}
            {!! Form::text('complemento', $paciente->complemento, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cidade', 'Cidade:') !!}
            {!! Form::text('cidade', $paciente->cidade, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estado', 'Estado:') !!}
            {!! Form::text('estado', $paciente->estado  , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', $paciente->cpf, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rg', 'RG:') !!}
            {!! Form::text('rg', $paciente->rg, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estadoCivil', 'Estado Civil:') !!}
            {!! Form::select('estadoCivil', array('Solteiro (a)' => 'Solteiro (a)',
                                                  'Casado (a)' => 'Casado (a)',
                                                  'Viúvo (a)' => 'Viúvo (a)',
                                                  'Divorciado (a)' => 'Divorciado (a)',
                                                  'Separado (a)' => 'Separado (a)'),
                                                  $paciente->estadoCivil, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('profissao', 'Profissão:') !!}
            {!! Form::text('profissao', $paciente->profissao, ['class'=>'form-control']) !!}
        </div>

        <?php
        if ($paciente->situacao = 'Ativo'){
            $ativo = 'true';
            $inativo = 'false';
        } else if ($paciente->situacao = 'Inativo') {
            $ativo = 'false';
            $inativo = 'true';
        }
        ?>
        <div class="form-group">
            {!! Form::label('situacao', 'Situação:') !!}
            <br/>
            <label class="checkbox-inline">
                {!! Form::checkbox('situacao', 'Ativo', true) !!}
                Ativo</label>
            <label class="checkbox-inline">
                {!! Form::checkbox('situacao', 'Inativo', false) !!}
                Inativo</label>
        </div>

        <div class="form-group">
            {!! Form::label('cns', 'CNS:') !!}
            {!! Form::text('cns', $paciente->cns, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('convenio_id', 'Convênio:') !!}
            {{ Form::select('convenio_id', \App\Convenio::orderBy('nome')->pluck('nome','id')->toArray(), $paciente->convenio_id, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('plano', 'Plano:') !!}
            {!! Form::text('plano', $paciente->plano, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('numeroCarteirinha', 'Número Carteirinha:') !!}
            {!! Form::text('numeroCarteirinha', $paciente->numeroCarteirinha, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('validade', 'Validade:') !!}
            {!! Form::date('validade', $paciente->validade, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('acomodacao', 'Acomodação:') !!}
            {!! Form::text('acomodacao', $paciente->acomodacao, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection