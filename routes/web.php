<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/vendas', function () {
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
            'arr' => $arr,
            'vendedores' => $vendedores,
            'formasdepagamento' => $formasdepagamento
        ]
    );
});


Route::get('/produtos/{id?}', function ($id = null) {
    return view('produtos', ['id' => $id]);
});
