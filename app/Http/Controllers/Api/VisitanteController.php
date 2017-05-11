<?php

namespace App\Http\Controllers\Api;


use App\Visitante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitanteController extends Controller
{

    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationship=['registro'];
    public function __construct(Visitante $model)
    {
        $this->model=$model;
    }
}
