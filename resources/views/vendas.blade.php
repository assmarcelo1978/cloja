    @extends('layouts.main')
    @extends('layouts.nav')
    @section('title', 'Cloja - Sistema de Control de Lojas')
    @section('content')

<div class="container border shadow rounded p-3 mt-3 mb-5" id="primcont">
    <h1 class="p-3 text-primary text-center bold"><ion-icon class="m-1" size="large" name="cart"></ion-icon>Efetuar uma Venda</h1>
    <div class="container p-0" id="secmcont">
        <div class="row justify-content-center border p-3 m-0">
                <div class="col-2">
                    <label for="staticEmail2" class="">Id</label>
                    <input type="text" class="form-control" id="staticEmail2" value="01">
                </div>
                <div class="col-6">
                    <label for="" class="">Cliente</label>
                    <input type="text" class="form-control" id="inputPassword2" value="Cliente Balcão">
                </div>
                <div class="col-2">
                <a type="submit" class="btn-success m-3 w-25"><ion-icon size="large" name="search"></ion-icon></a>
            </div>
            </div>
            
    </div>    
    <div class="row justify-content-center p-3 flex-nowrap border m-0">
        <div class="col-7">
            <label for="">Selecione o produto</label>
            <input class="form-control " type="text" name="" id="">
        </div>
        <div class="col-2 align-items-center p-0 m-3">
            <a type="submit" class="m-0"><ion-icon size="large" name="search"></ion-icon></a>
    </div>
    <div class="col-2">
        <label for="">Qtde</label>
        <input class="form-control " type="text" name="" id="">
    </div>
    </div>
    
    <div class="row border p-1 m-0 flex-nowrap ">
    <h3 class="bg-light rounded text-center">Produtos Incluídos</h3>
    </div>
    
    <div class="row border p-0 m-0 flex-nowrap"> 
    </form>
    <!-- Dados resgatados do banco-->
    <div class="col-md-6">
    





        

    <!-- FIM DADOS BANCO -->
    </div>
    </div>
    <div class="p-3 row justify-content-end m-0 border">
        <div class="col-6">
        <label for="" class="" style="text-align-last: right">Vendedor</label>
        <select class="form-select mb-3 " name="" id="">
            @foreach ( $vendedores as $vendedor)
            <option>{{ $vendedor }}</option>    
            @endforeach
            
        </select>
    </div>
    <div class="col-6">
        <label for="" class="" style="text-align-last: right">Forma de Pagamento</label>
        <select class="form-select mb-3 " name="" id="">
            @foreach ($formasdepagamento as $formadepagamento )
            <option value="{{$formadepagamento}}">{{ $formadepagamento }}</option>
            @endforeach
            
        </select>
    </div>
        <div class=" row form-check form-switch justify-content-end m-0">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Contabilizar</label>
        </div>
    </div>
    <hr>
        <div class="p-0 row justify-content-end m-0 ">
            <label class=" text" style="text-align-last: right"  for="total">Desconto</label>
            <select class="w-50 form-select  form-select mb-3 mr-0 ml-0" aria-label=".form-select example" type="select" name="total" id="total">
                <option value="1"> ------ </option>
            </select>
            </div>
            <div class="p-0 row justify-content-end m-0">
                <label class="text" style="text-align-last: right"  for="total">Total</label>
                <input class="w-50 text-danger bold form-control-lg mb-3 mr-0 ml-0 border-warning" style="text-align-last: right"  type="number" min="0,00" " name="total" id="totalvenda">
            </div>
        <div class="container m-1">
            <div class="p-0 row justify-content-end">
        <a name="" id="" class="btn w-25 btn-danger m-1" href="#" role="button">Cancelar venda</a>
        <a name="" id="" class="btn w-25 btn-primary m-1" href="#" role="button">Efetuar venda</a>
        </div>
    </div>
</div>
@endsection
@section('title')
@endsection