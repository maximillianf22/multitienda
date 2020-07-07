@extends('system.layouts.global.index')
@section('title', 'Olimpica')

@section('content')
<!-- Main content -->
<div class="main-content" id="panel">
<div class="col-3 fixed-top d-none d-sm-none d-md-block" style="margin-top: 120px">
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
<!-- Header -->
<div class="container-fluid bg-light"  style="margin-top: 68px">
   <div class="row mt-4">
      <div class="col-3  d-none d-sm-none d-md-block" style="margin-top: 120px">
      </div>
      <div class="col-12 col-md-9 bg-white">
         <div class="row row-cols-1 row-cols-md-3 bg-light">
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
         <div class="container-fluid">
            <div class="row mb-2 mt-4">
               <div class="col-2"></div>
               <div class="col-8 shadow-sm border bg-light rounded text-nowrap input-group">
                  <input type="text" class="form-control input-lg bg-light text-dark mt-2" placeholder="Busca tu producto" style="    border: 0px solid #cad1d7;">
                  <div class="input-group-append">
                    <i class="fas fa-search text-primary d-block d-sm-block d-md-none d-lg-none"></i>
                     <button class="btn btn-primary mt-2 mb-2 shadow-sm d-none d-sm-none d-md-block d-lg-block" type="button"><i class="fas fa-search"></i></button>
                  </div>
               </div>
               <div class="col-2"></div>
            </div>
         </div>
         <h3>Lacteos</h3>
         <div id="filterProducts" class="container-fluid pad-lft pad-all " style="border-top:0px solid #F1F3F4">
            <div class="row pad-all">
               <div id="product-28" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(28)">
                  <div class="sc-item-store ">
                     <div class="categorie">
                        <!-- <b>
                           </b> -->
                        <!-- <div class="sticky "></div> -->
                     </div>
                     <div class="img-card-product-ql">
                        <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200414231722.jpg" alt="Producto">
                     </div>
                     <div class="info-article ">
                        <div class="name">Alpina Avena Original</div>
                        <!-- <div class=""></div> -->
                        <div class="info-price ">
                           <div class="item-price">
                              $ 2,398
                           </div>
                        </div>
                        <span class="badge badge-light">
                        Sin variaciones
                        </span>
                     </div>
                  </div>
               </div>
               <div id="product-34" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(34)">
                  <div class="sc-item-store ">
                     <div class="categorie">
                        <!-- <b>
                           </b> -->
                        <!-- <div class="sticky "></div> -->
                     </div>
                     <div class="img-card-product-ql">
                        <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200415001208.jpg" alt="Producto">
                     </div>
                     <div class="info-article ">
                        <div class="name">Campi Mantequilla</div>
                        <!-- <div class=""></div> -->
                        <div class="info-price ">
                           <div class="item-price">
                              $ 8,175
                           </div>
                        </div>
                        <span class="badge badge-success">
                        + 2 variaciones
                        </span>
                     </div>
                  </div>
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