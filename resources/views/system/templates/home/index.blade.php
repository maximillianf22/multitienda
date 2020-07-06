@extends('system.layouts.global.index')
@section('title', 'Home')

@section('content')
<!-- Section Header-->
<div class="wrapper">
    <div>
      <div class="squares square1 d-none d-sn-none d-md-block d-lg-block"></div>
      <div class="squares square3 d-none d-sn-none d-md-block d-lg-block"></div>
      <div class="squares square5 d-none d-sn-none d-md-block d-lg-block"></div>
 <div class="container  bg-white shadow" style="background-image: url('{{asset('assets/img/ill/header.jpg')}}'); background-size:cover;background-repeat:no-repeat;  background-position: center center; height: 50vh; z-index: 999999999;border-radius: 0px 0px 100px 100px;"><br>
    <div class="row mt-5">
      <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-center flex-column">
          <h3 class="title text-center text-white text-uppercase">
            AQUI PUEDES <strong>COMPRAR</strong><br>
            EN TU TIENDA <br>
            O SUPERMERCADO <br>
            <strong>FAVORITO</strong>
          </h3>
          <div class="description pull-center text-center mt-0 pt-0">
            <button class="btn btn-primary text-uppercase btn-round"><h5 class="text-white p-0 m-0"><b>¡Desde Casa!</b></h5></button>
          </div>
      </div>
    </div>
  </div>
 </div>
</div>
<!-- Section Search addres-->
<div class="container bg-white mt-5 rounded p-3">
    <div class="row">
      <div class="col-md-2 col-0"></div>
      <div class="col-md-8 col-12">
        <h1 class="text-primary display-3 text-center">Seguro <strong class="text-secondary">econtrarás</strong> lo que buscas</h1>
      </div>
      <div class="col-md-2 col-0"></div>
    </div>
    <div class="row mb-3">
      <div class="col-md-2 col-0"></div>
      <div class="col-md-8 col-12">
        <form class="form-inline bg-light rounded text-nowrap bttn-search">
          <div class="input-group no-border mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text bg-light mr-3 mt-1"><i class="fas fa-map-marker-alt fa-2x text-primary"></i></span>
            </div>
            <input type="text" class="form-control input-lg bg-light text-dark mt-1" style="font-size: 1.3rem;" placeholder="Ingresa una dirección" >
          </div>
        </form>
      </div>
      <div class="col-md-2 col-0"></div>
    </div>
  </div>
<!-- Section categories-->
<div class="container mt-4 rounded p-3">
  <h2 class="text-dark display-4 text-left mb-0">Nuestras <strong class="text-secondary">Categorias</strong></h2>
  <div class="row mx-auto mt-0">
    <div class="col-md-2 col-6">
      <div class="card card-blog card-background categories" data-animation="zooming">
        <div class="full-background" style="background-image: url('./assets/img/categories/supermercado.jpg')"></div>
      </div>
      <h5 class="text-dark text-center mt-3"><strong>Supermecados</strong></h5>
    </div>
    <div class="col-md-2 col-6">
      <div class="card card-blog card-background categories" data-animation="zooming">
        <div class="full-background" style="background-image: url('./assets/img/categories/restaurantes.jpg')"></div>
      </div>
      <h5 class="text-dark text-center mt-3"><strong>Restaurantes</strong></h5>
    </div>
    <div class="col-md-2 col-6">
      <div class="card card-blog card-background categories" data-animation="zooming">
        <div class="full-background" style="background-image: url('./assets/img/categories/farmacia.jpg')"></div>
      </div>
      <h5 class="text-dark text-center mt-3"><strong>Farmacias</strong></h5>
    </div>
    <div class="col-md-2 col-6">
      <div class="card card-blog card-background categories" data-animation="zooming">
        <div class="full-background" style="background-image: url('./assets/img/categories/tech.jpg')"></div>
      </div>
      <h5 class="text-dark text-center mt-3"><strong>Tecnologia</strong></h5>
    </div>
    <div class="col-md-2 col-6">
      <div class="card card-blog card-background categories" data-animation="zooming">
        <div class="full-background" style="background-image: url('./assets/img/categories/moda.jpg')"></div>
      </div>
      <h5 class="text-dark text-center mt-3"><strong>Moda</strong></h5>
    </div>
    <div class="col-md-2 col-6">
      <div class="card card-blog card-background categories" data-animation="zooming">
        <div class="full-background" style="background-image: url('./assets/img/categories/mas.jpg')"></div>
      </div>
      <h5 class="text-dark text-center mt-3"><strong>Mas</strong></h5>
    </div>
  </div>
</div>
<!-- Section app-->
<div class="container mt-4 rounded bg-white">
  <div class="row ml-5 mr-5">
    <div class="col-md-6 my-auto">
      <h1 class="text-primary">
        Descarga <br>
        <strong class="text-secondary">nuestra aplicación</strong> <br>
        y siempre encontraras<br> 
        lo que buscas
      </h1>
      <div class="row">
        <div class="col-md-4 col-6">
          <img src="{{asset('assets/img/ill/playstore.png')}}">
        </div>
        <div class="col-md-4 col-6">
          <img src="{{asset('assets/img/ill/appstore.png')}}">
        </div>
        <div class="col-md-3 col-0">
        </div>
      </div>
    </div>
    <div class="col-md-6 text-right">
        <img src="{{asset('assets/img/ill/phone.png')}}" class="d-none d-sm-none d-md-block d-lg-block ml-auto" style="max-width: 60%; min-width: 60%">
        <img src="{{asset('assets/img/ill/phone.png')}}" class="d-block d-sm-block d-md-none d-lg-none" >
    </div>
  </div>
</div>
<!-- Section Valor-->
<div class="container mt-5">
  <div class="row">
   <div class="col-md-4">
     <div class="row">
       <div class="col-4">
         <div class="card mx-auto my-auto">
           <img src="{{asset('assets/img/ill/compra.png')}}" class="">
         </div>
       </div>
       <div class="col-8">
         <h6 class="card-category text-muted text-uppercase">Compra</h6>
         <h4 class="card-title text-dark">Desde de tu hogar</h4>
       </div>
     </div>
   </div>
   <div class="col-md-4">
     <div class="row">
       <div class="col-4">
         <div class="card mx-auto my-auto">
           <img src="{{asset('assets/img/ill/envios.png')}}" class="">
         </div>
       </div>
       <div class="col-8">
         <h6 class="card-category text-muted text-uppercase">Enviós</h6>
         <h4 class="card-title text-dark">Garantizados por la empresa</h4>
       </div>
     </div>
   </div>
   <div class="col-md-4">
     <div class="row">
       <div class="col-4">
         <div class="card mx-auto my-auto">
           <img src="{{asset('assets/img/ill/trabajamos.png')}}" class="">
         </div>
       </div>
       <div class="col-8">
         <h6 class="card-category text-muted text-uppercase">Disponiblidad</h6>
         <h4 class="card-title text-dark">100% las 24 horas del dia</h4>
       </div>
     </div>
   </div>
  </div>
</div>
<!-- Section Actions-->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <div class="card card-blog card-background" data-animation="true">
        <div class="full-background border-no-radius" style="background-image: url('https://image.freepik.com/foto-gratis/repartidor-masculino-uniforme-negro-paquete_230726-115.jpg')"></div>
        <div class="card-body">
          <div class="content-bottom">
            <h6 class="card-category text-light text-uppercase">Se un Dilifavor</h6>
            <a href="javascript:;">
              <h3 class="card-title text-white">¿Te interesa tener ingresos Extras? Tenemos los mejores beneficios</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-blog card-background" data-animation="zooming">
        <div class="full-background border-no-radius" style="background-image: url('https://image.freepik.com/foto-gratis/socios-dandose-mano-despues-cantar-contrato_1163-5304.jpg')"></div>
        <div class="card-body">
          <div class="content-bottom">
            <h6 class="card-category text-light text-uppercase">Se un Alidado</h6>
            <a href="javascript:;">
              <h3 class="card-title text-white">¡Invierte para ganar sin correr riesgos!</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-blog card-background" data-animation="zooming">
        <div class="full-background border-no-radius" style="background-image: url('https://image.freepik.com/foto-gratis/senalizacion-negra-maqueta-pared-madera-rustica_53876-69143.jpg')"></div>
        <div class="card-body">
          <div class="content-bottom">
            <h6 class="card-category text-light text-uppercase">Publica tu Tienda</h6>
            <a href="javascript:;">
              <h3 class="card-title text-white">¿Quieres subir de nivel tu negocio? ¡Contactanos!</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
  @include('system.layouts.global.components.footer')
@endsection

