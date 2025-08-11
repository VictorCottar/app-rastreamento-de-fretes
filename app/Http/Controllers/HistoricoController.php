<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function __invoke(Request $request)
    {
        $telefone = $request->input("telefone", '');

        $cliente = Cliente::where('telefone', $telefone)
            ->with('enviados', 'recebidos')
            ->first();

        if (!$cliente) {
            return redirect()->back()->with('error', 'Cliente não localizado.');
        }

        return view('frete.historico', [
            'cliente' => $cliente
        ]);
    }
}
