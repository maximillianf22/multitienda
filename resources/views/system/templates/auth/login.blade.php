@extends('system.layouts.global.index')
@section('title', 'Login')

@section('content')
  <!-- Header -->
  <div class="wrapper section-signup m-0 p-0" style="background-image: url('{{asset('assets/img/bg/login.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
    <div class="page-header container-fluid">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="row">
          <div class="content-center text-left col-md-4 ">
            <div class="card card-contact card-raised p-3 bg-white">
              <div class="card-header text-center">
                <img src="{{ asset('assets/img/brand/logoa.png')}}" width="20%" class="d-none d-lg-block mx-auto">
                <h3 class="card-title text-dark display-3 mt-2"> <strong>Iniciar sesión</strong>...</h3>
              </div>
              <div class="card-body pb-0">
                <form role="form" method="POST" action="" autocomplete="off">
                  {{ csrf_field() }}
                  <div class="form-group has-feedback">
					<div class="input-group">
					  <div class="input-group-prepend">
					    <span class="input-group-text"><i class="fa fa-phone text-primary"></i></span>
					  </div>
					  <input id="telefono" type="number" class="form-control" name="number" placeholder="Numero de telefono" value="{{ old('telefono') }}" required autofocus>
					</div>
                  </div>
                  <div class="form-group has-feedback">
					<div class="input-group">
					  <div class="input-group-prepend">
					    <span class="input-group-text"><i class="fa fa-lock text-primary"></i></span>
					  </div>
                     <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
					</div>
                  </div>
                  <div class="card-footer text-center">
                    <div class="col-xs-12" style="padding-bottom: 15px;">
                      <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Ingresar</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center mt-0">
                <div class="pull-left ml-3 mt-2 mb-3">
                  <h6>
                    <a href="{{ url('/register') }}" class="link footer-link text-dark">Regitsrarme</a>
                  </h6>
                </div>
                <div class="pull-right mr-3 mt-2 mb-3">
                  <h6>
                    <a href="{{ url('/recoveryaccount') }}" class="link footer-link">¿olvido su clave?</a>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection