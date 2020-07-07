@extends('system.layouts.global.index')
@section('title', 'Tiendas')

@section('content')
<!-- Section slider-->
@include('system.layouts.global.components.slider')
<div class="container shadow-sm bg-white d-none d-sm-none d-md-block d-lg-block mt-4 rounded">
  <div class="row mt-2">
    <div class="col-md-2 col-0"></div>
    <div class="col-md-8 col-12">
      <h1 class="text-primary display-3 text-center">Seguro <strong class="text-secondary">econtrarás</strong> lo que buscas</h1>
    </div>
    <div class="col-md-2 col-0"></div>
  </div>
    <ul class="nav justify-content-center nav nav-pills nav-fill flex-column flex-sm-row mb-0">
      <li class="nav-item mx-auto pr-0" style="border-bottom: .1rem solid #df0024!important;">
        <a class="nav-link bg-white mb-0 mt-1 hovertext no-border-radius" href="#!"><strong class="text-dark">Supermercados</strong></a>
      </li>
      <li class="nav-item mx-auto pr-0" style="border-bottom: .1rem solid #df0024!important;">
        <a class="nav-link bg-white mb-0 mt-1 hovertext no-border-radius" href="#!"><strong class="text-dark">Farmacias</strong></a>
      </li>
      <li class="nav-item mx-auto pr-0" style="border-bottom: .1rem solid #df0024!important;">
        <a class="nav-link bg-white mb-0 mt-1 hovertext no-border-radius" href="#!"><strong class="text-dark">Deportes</strong></a>
      </li>
       <li class="nav-item mx-auto pr-0" style="border-bottom: .1rem solid #df0024!important;">
        <a class="nav-link bg-white mb-0 mt-1 hovertext no-border-radius" href="#!"><strong class="text-dark">Licores</strong></a>
      </li>
       <li class="nav-item mx-auto pr-0" style="border-bottom: .1rem solid #df0024!important;">
        <a class="nav-link bg-white mb-0 mt-1 hovertext no-border-radius" href="#!"><strong class="text-dark">Moda</strong></a>
      </li>
      <li class="nav-item mx-auto pr-0" style="border-bottom: .1rem solid #df0024!important;">
        <a class="nav-link bg-white mb-0 mt-1 hovertext no-border-radius" href="#!"><strong class="text-dark">Otros</strong></a>
      </li>
    </ul>
</div>
<!-- Section Supermercados-->
<div class="container">
    <div class="col-12">
      <div class="container">
        <div class="row">
          <div class="container mt-4 rounded p-3">
            <div class="row mx-auto mt-0">
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/supermercado.jpg')"></div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-10 mx-auto mt-3">
                        <div class="stats stats-right mt-5">
                        <i class="fas fa-clock"></i> Abierto
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mb-0"><span class="badge badge-danger rounded">50% Descuentos</span></p>
                <h4 class="text-dark text-center mb-0"><strong>Olimpica</strong></h4>
                  <h5 class="text-muted text-center">Supermercado</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/restaurantes.jpg')"></div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-10 mx-auto mt-3">
                        <div class="stats stats-right mt-5">
                        <i class="fas fa-clock"></i> Abierto
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mb-0"><span class="badge badge-danger rounded">50% Descuentos</span></p>
                <h4 class="text-dark text-center mb-0"><strong>Exito</strong></h4>
                  <h5 class="text-muted text-center">Supermercado</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/farmacia.jpg')"></div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-10 mx-auto mt-3">
                        <div class="stats stats-right mt-5">
                        <i class="fas fa-clock"></i> Abierto
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mb-0"><span class="badge badge-danger rounded">50% Descuentos</span></p>
                <h4 class="text-dark text-center mb-0"><strong>Farmatodo</strong></h4>
                  <h5 class="text-muted text-center">Farmacia</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/tech.jpg')"></div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-10 mx-auto mt-3">
                        <div class="stats stats-right mt-5">
                        <i class="fas fa-clock"></i> Abierto
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mb-0"><span class="badge badge-danger rounded">50% Descuentos</span></p>
                <h4 class="text-dark text-center mb-0"><strong>Carulla</strong></h4>
                  <h5 class="text-muted text-center">Supermercado</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/moda.jpg')"></div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-10 mx-auto mt-3">
                        <div class="stats stats-right mt-5">
                        <i class="fas fa-clock"></i> Abierto
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mb-0"><span class="badge badge-danger rounded">50% Descuentos</span></p>
                <h4 class="text-dark text-center mb-0"><strong>Price Smart</strong></h4>
                  <h5 class="text-muted text-center">Tienda Express</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/mas.jpg')"></div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-10 mx-auto mt-3">
                        <div class="stats stats-right mt-5">
                        <i class="fas fa-clock"></i> Abierto
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mb-0"><span class="badge badge-danger rounded">50% Descuentos</span></p>
                <h4 class="text-dark text-center mb-0"><strong>Locatel</strong></h4>
                  <h5 class="text-muted text-center">Farmacia</h6>
              </div>
            </div>
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

