@extends('system.layouts.global.index')
@section('title', 'Olimpica')

@section('css')
<style type="text/css">
.card-producto{
    max-height: 140px !important;
    min-height: 140px !important;
}

.producto{
    max-height: 140px !important;
    width: auto !important;
    height: auto !important;
}

.wraps {
  display: flex;
  justify-content: space-between;
}

.mains {
  width: 75%;
  height: 150vh;
}

.sidebars {
  width: 20%;
  height: 25vh;
  position: -webkit-sticky;
  position: sticky;
  top: 100px;
}
</style>
@endsection

@section('content')
<!-- Main content -->
 <div class="">
   <div class="wrapper">
    <div>
     <div class="container bg-white shadow" style="background-image: url('{{asset('assets/img/ill/header3.jpg')}}'); background-size:cover;background-repeat:no-repeat;  background-position: center center; height: 25vh; z-index: 999999999;border-radius: 0px 0px 100px 100px;"><br>
      <div class="row mt-5">
        <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-center flex-column">
          
        </div>
      </div>
     </div>
    </div>
  </div>
<!-- Header -->
  <div class="container-fluid ">
     <div class="row mt-5 wraps">
        <div class="sidebars d-none d-sm-none d-md-block ml-4" style="margin-top: 0px" style="margin-top: 35px; min-height: 20000000px">
           <div class="list-group bg-white">
              <button type="button" class="list-group-item list-group-item-action active">
              Super Mercado &nbsp;<i class="fa fa-angle-right"></i>
              </button>
              <button type="button" class="list-group-item list-group-item-action">Tecnologia &nbsp;<i class="fa fa-angle-down"></i></button>
              <div class="container border-right border-left">
                 <div class="list-group list-group-flush mt-1 mb-1 ml-3">
                    <button type="button" class="list-group-item list-group-item-action p-2">Telefonos</button>
                    <button type="button" class="list-group-item list-group-item-action p-2">Televisores</button>
                    <button type="button" class="list-group-item list-group-item-action p-2">Laptops</button>
                    <button type="button" class="list-group-item list-group-item-action p-2">Accesorios</button>
                    <button type="button" class="list-group-item list-group-item-action p-2">Parlantes</button>
                    <button type="button" class="list-group-item list-group-item-action p-2">Smart Watch</button>
                 </div>
              </div>
              <button type="button" class="list-group-item list-group-item-action">Salud &nbsp;<i class="fa fa-angle-right"></i></button>
              <button type="button" class="list-group-item list-group-item-action">Hogar &nbsp;<i class="fa fa-angle-right"></i></button>
           </div>
        </div>
        <div class="mains">
        <div class="bg-white">
              <div class="owl-carousel owl-head owl-theme owl-loaded owl-drag">
                 <div class="owl-stage-outer">
                    <div class="owl-stage">
                       <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                          <div class="item">
                             <div class="card-product m-0">
                                <div class="card-image">
                                   <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                   <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/3d4ce4766ed60e3a4de2501bd9382f1d.jpg" class="shad border-radius" alt="...">
                                   </a>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                          <div class="item">
                             <div class="card-product m-0">
                                <div class="card-image">
                                   <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                   <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/f331bd2fb320cde4b475e68493c5d875.jpg" class="shad border-radius" alt="...">
                                   </a>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                          <div class="item">
                             <div class="card-product m-0">
                                <div class="card-image">
                                   <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                   <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/940c7408303ef4d971b7202886ba5d9a.jpg" class="shad border-radius" alt="...">
                                   </a>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                          <div class="item">
                             <div class="card-product m-0">
                                <div class="card-image">
                                   <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                   <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/2554291e34bad47583d388e43d754323.jpg" class="shad border-radius" alt="...">
                                   </a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="container">
              <div class="row mb-3 mt-4">
                 <div class="col-2"></div>
                 <div class="col-8 shadow-sm border bg-white rounded text-nowrap input-group">
                    <div class="input-group-prepend d-block d-sm-block d-md-none d-lg-none">
                      <span class="input-group-text  mr-3 mt-1" style="border: 0px solid #cad1d7;">
                        <i class="fas fa-search text-primary mt-1"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control input-lg  text-dark mt-2" placeholder="Busca tu producto" style="    border: 0px solid #cad1d7;">
                    <div class="input-group-append d-none d-sm-none d-md-block d-lg-block">
                       <button class="btn btn-primary mt-2 mb-2 shadow-sm" type="button"><i class="fas fa-search"></i></button>
                    </div>
                 </div>
                 <div class="col-2"></div>
              </div>
           </div>

        </div>
     </div>
  </div>
</div>
@endsection

@section('js')
<script> $('.owl-head').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true,
                nav: true
            },
            600: {
                items: 2,
                loop: true,
                nav: false
            },
            1100: {
                items: 3,
                loop: true,
                nav: false
            }

        }
    })
</script>
@endsection