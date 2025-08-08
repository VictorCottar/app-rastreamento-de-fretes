<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RastreamentoController extends Controller
{

    public function __invoke(){
        return view('frete.rastreamento');
    }
}
