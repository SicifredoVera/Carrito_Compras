<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   

        <!-- Styles -->
        <style>
            
            .img {
            
}



            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <br>
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Pagina de Productos</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <br>
        <center>
       <h1 style="color:#11208E">EMPRESA TÉCNOLOGICA CUARTA DIMENSIÓN</h1> 
       </center>
       <br>
       <br>
        <div class="container">
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style="background-image: url(img/isi1.png); background-size: 100%;">
    <div class="col-md-6 px-0"> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
       
    </div>
  </div>
  

<h1>¿Quienes Somos?</h1>

<center>
        <p class="lead my-4" style="color:#000000">Somos una empresa dedicada a la venta de equipos y accesorios de cómputo. Actualmente somos una de las empresas más consultadas a la hora de adquirir un equipo de cómputo para la oficina y/o el hogar. Nos preocupamos por cubrir perfectamente tus necesidades por lo que ofrecemos excelentes productos de mejor calidad en el mercado.</p>
</center>
   <div class="container">

  <div class="row mb-3">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Laptop HP 250 G6 Intel Core i3-6006U, FreeDOS</strong>
          <h3 class="mb-0">Caracteristicas</h3>
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto">
            Procesador Intel Core i3-6006U
FreeDOS en 2.0 en Español. (Sin Sistema Operativo)
Memoria RAM 4 GB
Disco duro 1TB
Pantalla LED de 15.6 pulgadas
USB 2.0 (1)
USB 3.1 (2)
RJ45 (1)*No cuenta con Lectora para DVD / CD*Imagen Referencial</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="img/isi2.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
   
        
    
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">HP 15 Ryzen R3 15.6-inch Full HD</strong>
          <h3 class="mb-0">Caracteristicas</h3>
          <div class="mb-1 text-muted"></div>
          <p class="mb-auto">Procesador AMD Ryzen 3 2200U,Windows 10 Home, pantalla Full HD de 15,6 pulgadas (1920x1080) ,Memoria y almacenamiento: 4 GB de RAM DDR4, ampliable a 16 GB, con AMD Radeon Vega 3 Graphics | Almacenamiento: HDD de 1TB</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="150" src="img/isi3.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
    </div>
     <div class="container">

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Laptop YG 520-14IKB I3 4G 500 10H Lenovo
</strong>
          <h3 class="mb-0">Caracteristicas</h3>
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto"> Video magnífico. Audio envolvente mejorado. Funciones de chat por video optimizadas. Todo eso tiene la Yoga 520, una laptop 2 en 1 de 14” con procesadores potentes y una batería de larga duración. Potencia tu experiencia incluso más con opciones de avanzada, como el lápiz óptico Lenovo Active Pen.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="img/isi4.webp" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
   
        
    
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Laptop Lenovo 320 15.6 Core I3 1tb 4gb Ram Morada</strong>
          <h3 class="mb-0">Caracteristicas</h3>
          <div class="mb-1 text-muted"></div>
          <p class="mb-auto">Modelo: 
Marca: Lenovo
Serie: IdeaPad
Modelo: 320-15ISK
Color: Negro
Número de parte: 80XH0003LM
Tipo: Notebook
Procesador: 
Marca: Intel
Línea: Core i3
Modelo: 6006U
Generación: 6ta Generación</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="150" src="img/isi5.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>




    </div>

  </div>
</div>
</body>
</html>
