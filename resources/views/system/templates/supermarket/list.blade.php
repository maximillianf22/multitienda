@extends('system.layouts.global.index')
@section('title', 'Tiendas')

@section('content')
<!-- Section Header-->
<div class="container">
    <div class="col-12">
      <div class="container">
        <div class="row">
          <div class="container mt-4 rounded p-3">
            <div class="row mx-auto mt-0">
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/supermercado.jpg')"></div>
                </div>
                <h4 class="text-dark text-center mt-4 mb-0"><strong>Olimpica</strong></h4>
                  <h5 class="text-muted text-center">Supermercado</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/restaurantes.jpg')"></div>
                </div>
                <h4 class="text-dark text-center mt-4 mb-0"><strong>Exito</strong></h4>
                  <h5 class="text-muted text-center">Supermercado</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/farmacia.jpg')"></div>
                </div>
                <h4 class="text-dark text-center mt-4 mb-0"><strong>Farmatodo</strong></h4>
                  <h5 class="text-muted text-center">Farmacia</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/tech.jpg')"></div>
                </div>
                <h4 class="text-dark text-center mt-4 mb-0"><strong>Carulla</strong></h4>
                  <h5 class="text-muted text-center">Supermercado</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/moda.jpg')"></div>
                </div>
                <h4 class="text-dark text-center mt-4 mb-0"><strong>Price Smart</strong></h4>
                  <h5 class="text-muted text-center">Tienda Express</h6>
              </div>
              <div class="col-md-3 col-6">
                <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/categories/mas.jpg')"></div>
                </div>
                <h4 class="text-dark text-center mt-4 mb-0"><strong>Locatel</strong></h4>
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

