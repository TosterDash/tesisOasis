<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <title>@yield('titlePage')</title>
</head>
<header>
    <div class="container-fluid text-center logo-border logo-background">
        <img class="logo" src="img/oasis-logo2.png">
    </div>
    <div class="">
        <nav class="navbar navbar-expand-sm ">

            <!-- Links -->
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-danger" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="#">Menú</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="#">Acceso clientes</a>
              </li>
            </ul>
          
          </nav>
    </div>
</header>
<body>
    @yield('bodyPage')
</body>
<footer>
    @yield('footerPage')
</footer>
</html>    
    
    
    



