<!--Modal de productos-->
<div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="row modal-body">
            <div class="col-md-6 mx-auto justify-content-center text-center">
               <img src="http://cafri.com.co/storage/products/item_20200417164522.jpg" alt="..." class="align-self-center mr-3" style="width: 55vh">
            </div>
            <div class="col-md-6 mx-auto justify-content-center text-center">
               <div class="container text-left">
                  <div class="title display-4 font-weight-bold">Producto</div>
                  <div class="title display-6 lead  text-muted mt-0">Descripcion</div>
                  <div class="row">
                     <div class="col-6">
                        <div class="title display-5 font-weight-bold text-danger mt-1">$ 8.590.565</div>
                     </div>
                     <div class="col-6">
                        <div class="btn-group mb-1">
                           <button class="btn btn-info btn-sm"> <i class="ni ni-fat-delete"></i> </button>
                           <button class="btn btn-secondary btn-sm"> 1 </button>
                           <button class="btn btn-info btn-sm"> <i class="ni ni-fat-add"></i> </button>
                        </div>
                     </div>
                  </div>
                  <div id="item-checked-108 mt-2" class="checkbox">
                     <input onclick="selectProductCheck(74,108)" data-nameproduct="Pan KYS Pan Sencillo" data-idattribute="108" data-price="3815" data-minvalue="1" type="checkbox" id="listProduct_108">
                     <label for="listProduct_108" style="font-size:12px; line-height:16px; width:70%"><b style="font-weight: bold">Producto</b>
                     ( UND )
                     <br>  $ 3,815
                     </label>
                  </div>
                  <div class="title display-5 font-weight-bold mt-1 ">Instrucciones Adicionales</div>
                  <div class="form">
                     <div class="input-group">
                        <textarea class="form-control" aria-label="Instrucciones adicionales"></textarea>
                     </div>
                  </div>
                  <div class="pad-all">
                     <!--<div id="addNew_ProductCar" onclick="addCarShoping()" class="btn--modal-theme disabled"> <i class="lni lni-cart"></i> Agregar a la cesta </div>-->
                     <div id="" onclick="addCarShoping()" class="btn--modal-theme text-center"> <i class="lni lni-cart"></i> Agregar a la cesta </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

{{--
<div class="container p-4">
  <div class="row m-2 border-top">
    <div class="col-6 display-5 text-uppercase font-weight-bold mt-4 ">Tecnología</div>
    <div class="col-6 text-right">
      <a class="btn btn-outline-info btn-sm btn-round mt-4" href="#">
          VER MAS
      </a>
    </div>
  </div>
  <div class="col-md-12 p-0">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="owl-carousel owl-products owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer">
        <div class="owl-stage">

          <div class="owl-item col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-4">
            <div class="item card-lift--hover">
              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                <div class="sc-item-store">
                  <div class="categorie">
                  </div>
                     <div class="img-card-product-ql">
                        <img id="logoTheme" src="http://toolbox.ventual.co/files/filesProduct/20191030131938-69-tv_49_sam.jpg" alt="Producto">
                      </div>
                      <div class="info-article mt-4 mb-3">
                        <div class="name text-center mx-auto">Televisor 43Pulgadas</div>
                       <div class="info-price ">
                          <div class="item-price">
                             $ 4.850.000
                          </div>
                       </div>
                        <span class="badge badge-secondary">
                         Sin variaciones
                       </span>
                    </div>
                </div>
              </a>
             </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container p-4">
  <div class="row m-2 border-top">
    <div class="col-6 display-5 text-uppercase font-weight-bold mt-4 ">Hogar</div>
    <div class="col-6 text-right">
      <a class="btn btn-outline-info btn-sm btn-round mt-4" href="#">
          VER MAS
      </a>
    </div>
  </div>
  <div class="col-md-12 p-0">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="owl-carousel owl-products owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer">
        <div class="owl-stage">

          <div class="owl-item col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-4">
            <div class="item card-lift--hover">
              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                <div class="sc-item-store">
                  <div class="categorie">
                  </div>
                     <div class="img-card-product-ql">
                        <img id="logoTheme" src="https://exitocol.vtexassets.com/arquivos/ids/873768-500-auto?width=500&height=auto&aspect=true" alt="Producto">
                      </div>
                      <div class="info-article mt-4 mb-3">
                        <div class="name text-center mx-auto">Caribe Vaso 7 OZ Desechable</div>
                       <div class="info-price ">
                          <div class="item-price">
                             $ 981
                          </div>
                       </div>
                        <span class="badge badge-secondary">
                         Sin variaciones
                       </span>
                    </div>
                </div>
              </a>
             </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container p-4">
  <div class="row m-2 border-top">
    <div class="col-6 display-5 text-uppercase font-weight-bold mt-4 ">Salud</div>
    <div class="col-6 text-right">
      <a class="btn btn-outline-info btn-sm btn-round mt-4" href="#">
          VER MAS
      </a>
    </div>
  </div>
  <div class="col-md-12 p-0">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="owl-carousel owl-products owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer">
        <div class="owl-stage">

          <div class="owl-item col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-4">
            <div class="item card-lift--hover">
              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                <div class="sc-item-store">
                  <div class="categorie">
                  </div>
                     <div class="img-card-product-ql">
                        <img id="logoTheme" src="http://toolbox.ventual.co/files/fotoPerfil/LOGO%20FARMA.png" alt="Producto">
                      </div>
                      <div class="info-article mt-4 mb-3">
                        <div class="name text-center mx-auto">Gasa Farmacia</div>
                       <div class="info-price ">
                          <div class="item-price">
                             $ 981
                          </div>
                       </div>
                        <span class="badge badge-secondary">
                         Sin variaciones
                       </span>
                    </div>
                </div>
              </a>
             </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container p-4">
  <div class="row m-2 border-top">
    <div class="col-6 display-5 text-uppercase font-weight-bold mt-4 ">Super Mercado</div>
    <div class="col-6 text-right">
      <a class="btn btn-outline-info btn-sm btn-round mt-4" href="#">
          VER MAS
      </a>
    </div>
  </div>
  <div class="col-md-12 p-0">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="owl-carousel owl-products owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer">
        <div class="owl-stage">

          <div class="owl-item col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-4">
            <div class="item card-lift--hover">
              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                <div class="sc-item-store">
                  <div class="categorie">
                  </div>
                     <div class="img-card-product-ql">
                        <img id="logoTheme" src="http://toolbox.ventual.co/files/filesProduct/20191116154710-68-Pan_Tajado.png" alt="Producto">
                      </div>
                      <div class="info-article mt-4 mb-3">
                        <div class="name text-center mx-auto">Pan Tajado Bimbo</div>
                       <div class="info-price ">
                          <div class="item-price">
                             $ 981
                          </div>
                       </div>
                        <span class="badge badge-secondary">
                         Sin variaciones
                       </span>
                    </div>
                </div>
              </a>
             </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
--}}




<a href="https://api.whatsapp.com/send?phone=573108777339&amp;text=Hola,%20deseo%20realizar%20un%20nuevo%20pedido%20" class="btn_whatsapp" target="_blank" >
  <i class="fab fa-whatsapp fa-3x mt-1 mb-1" aria-hidden="true"></i>
</a>

@if(Route::current()->getName() != 'login')
<div class="btn-cart-pay d-block d-sm-block d-md-none d-lg-none">
    <div class="row">
          <button data-toggle="modal" data-target="#modal-right" data-toggle-class="modal-open-aside" class="btn btn-info btn-icon btn-lg shadow-lg" type="button">
            <i class="fas fa-shopping-cart fa-4x"></i>
          </button>
        </div>
    </div>
</div>
@endif