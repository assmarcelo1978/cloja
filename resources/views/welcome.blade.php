<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CLOJA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body class="antialiased">
        <nav class="navbar bg-light fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">CLoja - Controle de Loja</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-start p-4 justify-content-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CLoja - Controle de Loja</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#"><ion-icon name="speedometer"></ion-icon>    Dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><ion-icon name="cart"></ion-icon>   Vendas</a>
                    </li>
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><ion-icon name="add-circle"></ion-icon>
                            Cadastros
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li class="p-3 bg-light ">Produtos</li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="cut"></ion-icon>    Tamanhos</a></li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="color-palette"></ion-icon>   Cores</a></li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="pricetags"></ion-icon>   Tipos de Venda</a></li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="shirt"></ion-icon>  Produtos</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li class="p-3 bg-light ">Pessoas</li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="person-add"></ion-icon>    Clientes e Fornecedores</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li class="p-3 bg-light "><ion-icon name="cash"></ion-icon>    Financeiro</li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="caret-up"></ion-icon>    Tipos de Receita</a></li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="caret-down"></ion-icon>    Tipos de Despesa</a></li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="card"></ion-icon>    Formas de Pagamento</a></li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="checkmark-done"></ion-icon>    Quantidades de Parcelas</a></li>
                        <li><a class="dropdown-item" href="#"><ion-icon name="gift"></ion-icon>    Descontos</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <ion-icon name="log-out"></ion-icon>Sair 
              </div>
            </div>
          </nav>

          <!-- Scripts -->
          <!-- Icones -->
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>
          <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        
        </script>
        </body>
    </body>
</html>
