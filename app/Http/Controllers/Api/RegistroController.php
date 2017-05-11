<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 01/05/17
 * Time: 23:29
 */

namespace App\Http\Controllers\Api;



use App\Visitante;

class RegistroController
{
    use \App\Http\Controllers\ApiControllerTrait;
    protected $model;
    public function __construct(Visitante $model)
    {
        $this->model=$model;
    }
}


