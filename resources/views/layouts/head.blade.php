<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css" >
    <link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css" >
    <title>@yield('titlePage')</title>
</head>
<header>
    <div class="container-fluid text-center logo-border logo-background">
        
        <nav class="navbar navbar-expand-sm ">
          <img class="logo" src="img/oasis-logo2.png">
          <!-- Links -->
          <div class="ml-auto">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-danger after-nav" href="{{route("index")}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger after-nav" href="{{route("menu")}}">
                  @auth
                  Hacer pedido/Menú
                  @else
                  Menú
                  @endauth
                </a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link text-danger after-nav" href=""><i class="fas fa-shopping-cart px-2"><span class="badge badge-danger">0</span></i></a>
              </li>
              @endauth
              <li class="nav-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    @auth
                      {{Auth::user()->name}}
                    @else
                      Inicia Sesión
                    @endauth
                  </button>
                  <div class="dropdown-menu">
                    @auth
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn">Cerrar Sesión</button>
                      </form>
                    @else
                      <h5 class="dropdown-header">Inicia con:</h5>
                      <a class="dropdown-item" href="{{route("redirect")}}"><i class="fab fa-google"></i> Google</a>
                    @endauth
                    
                    
                  </div>
                </div>
                
              </li>
            </ul>
          </div>
        
        </nav>
    </div>
</header>

@yield('bodyPage')

<footer>
    @yield('footerPage')
</footer>
<script src="{{asset("js/app.js")}}" defer></script>
@livewireScripts
</html>    
    
    
    



