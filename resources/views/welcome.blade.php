<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carrito Compras</title>

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
  <br>
    <br>

       
    </div>
  </div>
  

<h1>¿Quienes Somos?</h1>

<center>
        <p class="lead my-4" style="color:#000000">Somos una empresa dedicada a la venta de equipos y accesorios de cómputo. Actualmente somos una de las empresas más consultadas a la hora de adquirir un equipo de cómputo para la oficina y/o el hogar. Nos preocupamos por cubrir perfectamente tus necesidades por lo que ofrecemos excelentes productos de mejor calidad en el mercado.</p>
        <br> 
</center>

<h1>Misión</h1>
<center>
<p class="lead my-4" style="color:#000000">Cubrir las necesidades en equipos de cómputo para nuestros clientes generando confianza, otorgándole un valor agregado al servicio teniendo la calidad y la atención personalizada que usted se merece..</p>
</center>


<h1>Visión</h1>
<center>
<p class="lead my-4" style="color:#000000">Ser la primera opción para nuestros clientes a la hora de buscar un servicio de calidad y adquirir equipos de cómputo que cubran sus necesidades.</p>
</center>


<center>
<h1>Productos Que Ofrecemos</h1>
</center>
        <br>
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
          <strong class="d-inline-block mb-2 text-success">COMPUTADOR GAMER / DISEÑO PRO I7 7MA GENERACIÓN 8GB RAM, 1TB HDD, GTX 1050TI
</strong>
          <h3 class="mb-0">Caracteristicas</h3>
          <div class="mb-1 text-muted"></div>
          <p class="mb-auto">Mainboard Asus, Procesador Intel Core I7-7700 - 3.6ghz Sk 1151 7ma Generación, Memoria Kingston / Adata 8gb con disipador, Disco duro 1TB Sata, Tarjeta de Video GTX 1050Ti 4GB, HDMI / USB, Mouse, Teclado Gamer.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="150" src="img/isi17.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
    </div>
     <div class="container">

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Silla Gamer Dragster GT600 Fury Red
</strong>
          
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto">Conoce la nueva generación de sillas Dragster GT600 que cuentan con acabado en ecocuero, bordados de extrema calidad, reposabrazos 4D y mucho más. </p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="img/isi16.png" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
   
        
    
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">CABLE HDMI V1.4. 2M</strong>
          <h3 class="mb-0">Caracteristicas</h3>
          <div class="mb-1 text-muted"></div>
          <p class="mb-auto"> Cable HDMI Premiun, Soporta 3D, 1.4v, Resolución 1080p, Con Malla protectora la cual permite una mejor calidad de transmisión.
Conectores chapeados en Oro 24k, Cabezal de Meta</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="150" src="img/isi18.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>




    </div>

  </div>
</div>



<h2><b>Contactanos:</b></h2>
<p class="lead my-4" style="color:#000000"><b>Telefono:</b> 2398203 ext 192.</p>
<p class="lead my-4" style="color:#000000"><b>Celular:</b> 0994150181</p>
<p class="lead my-4" style="color:#000000"><b>Email:</b> isidro.vera@espam.edu.ec</p>
</body>
</html>
