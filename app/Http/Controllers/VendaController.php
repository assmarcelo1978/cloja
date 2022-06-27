<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function create()
    {
        $busca = request('search');

        $vendedores = [
            "Vendedor Padrão",
            "marcelo",
            "joão"
        ];

        $formasdepagamento = [
            "Dinheiro",
            "Pix",
            "Cartão de Débito",
            "Cartão de Crédito"
        ];

        $arr = [1, 2, 3, 5, 5];

        return view(
            'vendas',
            [
                'busca' => $busca,
                'arr' => $arr,
                'vendedores' => $vendedores,
                'formasdepagamento' => $formasdepagamento
            ]
        );
    }
}
