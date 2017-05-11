<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table= 'registro';
    protected $fillable=['registro_id','updated_at','created_at'];
}
