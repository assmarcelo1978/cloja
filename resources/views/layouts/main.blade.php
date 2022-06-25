<!DOCTYPE html>
<html lang                        = "{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset                 = "utf-8">
    <meta name                    = "viewport" content="width=device-width, initial-scale=1">
    <title>Vendas @yield('title')</title>
    <!-- Fonts -->
    <link href                    = "https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- Styles -->
        <link href                = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/styles.css">

  </head>

          {{-- Yeld body --}}
          @yield('content')
          <!-- Scripts -->
          <!-- Icones -->
          <script type            = "module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src    = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <!-- Bootstrap -->
        <script src               = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <footer class="bg-light footer sticky fixed-bottom text-center">
          <p class="p-1 m-1">@yield('title') - &copy 2022</p>
        </footer>
      </body>
    </html>
