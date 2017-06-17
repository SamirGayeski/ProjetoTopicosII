<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nome',
        'dataNascimento',
        'sexo',
        'email',
        'telefoneCelular',
        'telefoneResidencial',
        'endereco',
        'bairro',
        'numero',
        'complemento',
        'cidade',
        'estado',
        'cpf',
        'rg',
        'estadoCivil',
        'profissao',
        'situacao',
        'cns',
        'convenio_id',
        'plano',
        'numeroCarteirinha',
        'validade',
        'acomodacao'];

    public function convenio(){
        return $this->belongsTo('App\Convenio');
    }

    public function agendamentos(){
        return $this->hasMany('App\Agendamento');
    }
}
