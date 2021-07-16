@extends('layouts/head')

@section('titlePage',"Tacos Oasis")

@section('bodyPage')
<body class="background-body">
<div class="container my-5 px-0">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner/agua.jpg" alt="" width="100%" height="100%">
          </div>
          <div class="carousel-item">
            <img src="img/banner/flan.jpg" alt="" width="100%" height="100%">
          </div>
          <div class="carousel-item">
            <img src="img/banner/quesadilla.jpg" alt="" width="100%" height="100%">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      
      </div>
</div>

<!-- Part 2 -->

  <div class="container background-wood1">
    <div class="row">
      <div class="col-lg-4 bc-b border-card m-3">
        <h2 class="text-white my-5">BIENVENIDOS</h2>
        <p class="text-white">Desde el año 1978 les hemos brindado servicios a nuestros clientes con nuestros productos de calidad, venga a visitarnos
          en la calle 3 número 502. <br>
          Nos encontramos en el hermoso "Pueblo Magico" de Atlixco. Estamos para servirte a ti y a tu paladar.
          No te puedes ir sin degustar nuestros deliciosos productos.<br>
          Ven y visitanos!.
        </p>
      </div>
      <div class="col m-3">
          <img src="img/local/1.png" class="rounded " width="100%" height="700">
      </div>
    </div>
  </div>
</body>


    
@endsection


@section('footerPage')
    <!--Codigo html -->
@endsection

