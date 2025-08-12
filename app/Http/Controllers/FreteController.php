<?php

namespace App\Http\Controllers;

use App\Enums\FreteStatus;
use App\Helper;
use App\Http\Requests\StoreFreteRequest;
use App\Models\Frete;

class FreteController extends Controller
{
    public function store(StoreFreteRequest $request) {
        $dados = request()->all();
        $dados['codigo_rastreio'] = Helper::generateUniqueTrackingCode();
        $dados['status'] = FreteStatus::EM_TRANSITO;

        $frete = Frete::create($dados);

        return $frete;
    }
}
