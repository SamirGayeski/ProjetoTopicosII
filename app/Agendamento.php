<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'paciente_id',
        'usuario_id',
        'procedimento_id',
        'data',
        'horario',
        'status',
        'observacoes'];

    public function paciente(){
        return $this->belongsTo('App\Paciente');
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }

    public function procedimento(){
        return $this->belongsTo('App\Procedimento');
    }
}
