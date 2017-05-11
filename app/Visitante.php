<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $table= 'visitante';
    protected $fillable=['id','setor','nome','cpf'];

    public function registro(){
        return $this->belongsTo('App\Registro');
    }
}
