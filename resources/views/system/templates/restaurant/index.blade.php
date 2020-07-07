@extends('system.layouts.global.index')
@section('title', 'Restaurantes')

@section('content')

<div class="d-none d-sm-none d-md-block d-lg-block">
    <div class="categories">
        <ul class="categories-ul">
            <li class="categories-li">
                <h4> <strong>Categorias</strong></h4>
            </li>
            <li class="categories-li">
                <a href="#">Todos</a>
            </li>
            <li class="categories-li">
                <a href="#">Postres</a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="container mt-4 rounded p-3">
                    <div class="row mx-auto mt-0">
                        <div class="col-md-6 col-6">
                            <br>
                            <h4 class="text-dark text-center mt-4 mb-0"><strong>Restaurantes y cafeterías para ti</strong></h4>
                            <div class=" card card-blog mx-auto card-background categories" data-animation="true">
                                <div class="full-background" style="background-image: url('./assets/img/categories/supermercado.jpg')"></div>
                            </div>
                            <h4 class="text-dark text-center mt-4 mb-0"><strong>Olimpica</strong></h4>
                            <h5 class="text-muted text-center">Supermercado</h6>
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