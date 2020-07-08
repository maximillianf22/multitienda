@extends('system.layouts.global.index')
@section('css')
<style type="text/css">
    
}
.categories li{
    min-height: 20px;
    height: 20px;
    display: inline-block;
    padding: 0;
    white-space: nowrap;
}
.grid_items {
    /*padding:20px 3em 1em 1em;*/
    padding:20px;
    padding-left: 10px;
    display: grid;
    grid-template-columns: 100%;
    grid-column-gap: 0;
  }

  @media only screen and (min-width: 640px) {
    .grid_items {
      grid-template-columns: 60% 60%;
      grid-row-gap: 0px;/*Espacio entre columna con la resolucion*/
    }
    .rating{
        padding-right:60px;
        position: absolute;
    }
   /* .grid_items > div {
      padding: 20px;
    }*/
  }
  @media only screen and (min-width: 981px) {
    .grid_items {
      grid-template-columns: 33% 33% 33%;
      grid-row-gap: 0px;
    }
    .rating{
        padding-right: 15px;
    }
    /* .grid_items > div {
      padding: 30px;
    }*/
  }
  .grid_img{
    display: block;
    position: relative;
        width: 128px;
        transition: opacity 1s,box-shadow .3s;
        background-repeat: no-repeat;
        background-position: bottom;
        background-color: rgba(229,237,239,.35);
        background-size: cover;
        height: 96px;
        border-radius: 15px; 
  }
  
.caption {
    position: relative;
    left: 140px;
    bottom: 95px;
    width: calc(100% - 130px);
    text-align: left;
    display: inline-block;
    vertical-align: top;
}
.rating{
    display: inline-block;
    list-style: none;
    float: right;
}
.rating li{
    color: #FFB14B;
    font-size: 13px;
    display: inline-block;
}
.score{
    font-size: 12px;
    color: #332927;
    font-family: Poppins-SemiBold,Helvetica,Arial,sans-serif;
    text-align: right;
}
.time{
    align-items: center;
    font-size: 12px;
    line-height: 20px;
    color: #332927;
    text-align: right;
    padding: 0;
}
.dot-separator{
    color: #9faab7;
    display: inline-block;
    vertical-align: top;
    font-size: 7px;
    padding: 0 5px;
}
.price-content{
    font-size: 12px;
    line-height: 20px;
    color: #332927;
    text-align: right;
    margin-right: 5px;
}
.layout-wrapper {
    display: flex;
  }
  
  .menu {
    height: 35px;
    width: 100%;
    background: #87cfc4;
  }
  .sidebar-left {
    position: -webkit-sticky;
    position: sticky;
    width: 235px;
    padding: 15px 5px 15px 0;
    border-radius: 8px;
    z-index: 8;
    vertical-align: top;
    display: inline-block;
    font-size: 14px;
    background-color: #fff;
    top: 80px;
    min-height: 508px;
    max-height: 508px;
    overflow-y: auto;
    margin-bottom: 80px;
    margin-right: 20px;
    float: left;
    display: inline-block;
    word-wrap: break-word;
   }
 
   
::-webkit-scrollbar {
    width: 10px;
    border-radius: 10px;
  }
  
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #0ba7b1!important;
    border-radius: 10px;
  }
   /* Hide scrollbar for Chrome, Safari and Opera */
.sidebar-left::-webkit-scrollbar {
    display: none;
  }
  
  /* Hide scrollbar for IE, Edge and Firefox */
  .sidebar-left {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
  }
  
  @media only screen and (min-width: 1750px) {
  .sidebar-right {  
    width: 250px;
   }
   .sidebar-top{
       display: none;
   }
  }
  
  @media only screen and (min-width: 1535px) and  (max-width: 1749px) {
  .sidebar-right {  
    width: 35px;
   }
   .sidebar-top{
    display: none;
}
  }
  
  @media screen and (min-width: 1220px) and (max-width: 1534px) {
  .sidebar-right {  
    width: 30px;
   }
    .sidebar-top{
       display: none;
   }
  }
  
  @media only screen and (min-width: 960px) and (max-width: 1219px) {
    .sidebar-left {
    display: none;
   }
  
  .sidebar-top {
  overflow-x: auto;
  width: 100%;
  height: 50px;
  display: flex;
  justify-content: space-between;
  }
  .sidebar-right {  
    width: 30px;
   }
  }
  
  @media screen and (max-width: 959px) {
.sidebar-left {
    display: none;
   }
.sidebar-top {
    overflow-x: auto;
    -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;
  width: 100%;
  height: 50px;
  display: flex;
justify-content: space-between;
  }
  }
.categorylink li{
  
    display: block;
    border-left: 5px solid transparent;
    color: #ff441f;
    
    transition:  1s;  
}
.categorylink h5{
    display: block;
    padding: 11px 20px;
    font-size: 14px;
    transition: all .3s linear;
    text-align: left;
    color: #7d7d7d;
}
.categorylink .active{
    border-left: 3px groove #0ba7b1!important;;
}

.categorylink li:hover{
    border-left: 3px groove #0ba7b1!important;; 
    
}
</style>
@endsection
@section('title', 'Restaurantes')
@section('content')
<br><br><br><br><br>
<div class="sidebar-top">
    <div class="categoriesrest" style="position: absolute;">
    <h5> <strong>Categorias</strong></h5>
        <ul>
            <li>
                <h2>Supermercado</h2>
            </li>
            <li>
                <h2>Supermercado</h2>
            </li>
            <li>
                <h2>Supermercado</h2>
            </li>
            <li>
                <h2>Supermercado</h2>
            </li>
            <li>
                <h2>Supermercado</h2>
            </li>
            <li>
                <h2>Supermercado</h2>
            </li>
            <li>
                <h2>Supermercado</h2>
            </li>
        </ul>


    </div>
</div>
<div class="menu"></div>
<div class="sidebar-left">
    <div class="categorylink">
        <ul>
            <h3> <strong>Categorias</strong></h3>
            <li class="active">
                <h5>Todos</h5>
            </li>
            <li>
                <h5> <a>Todos</a></h5>
            </li>
            <li>
                <h5> <a>Todos</a></h5>
            </li>
            <li>
                <h5> <a>Todos</a></h5>
            </li>
            <li>
                <h5> <a>Todos</a></h5>
            </li>
            <li>
                <h5> <a>Todos</a></h5>
            </li>
            <li>
                <h5> <a>Todos</a></h5>
            </li>
            <li>
                <h5> <a>Todos</a></h5>
            </li>

        </ul>

    </div>
</div>
</div>
</div>

<div class="container">
<br><br><br><br>
<h3><strong>Restaurantes</strong></h3>
<div class="grid_items">
    <div class="grid_item">
        <div class="grid_img" style="background-image: url('./assets/img/categories/restaurantes.jpg')">
        </div>

        <div class="caption">

            <h4 class="text-dark text-left mb-0"><strong>Olimpica</strong><span>
                    <ul class="rating">
                        <li class="fas fa-star"><span class="score"> 4.6 </span></li>
                    </ul>
                </span></h4>
            <h5 class="text-muted text-left">Supermercado</h6>
                <span class="time"><i class="fa fa-clock"></i> 22 min </span>
                <span class="price-content">
                    <span class="dot-separator">●
                </span>
                <!----> $&nbsp;3.450 </span>

        </div>

    </div>
    <div class="grid_item">
        <div class="grid_img" style="background-image: url('./assets/img/categories/restaurantes.jpg')">
        </div>
        <div class="caption">

            <h4 class="text-dark text-left mb-0"><strong>Olimpica</strong><span>
                    <ul class="rating">
                        <li class="fas fa-star"><span class="score"> 4.6 </span></li>
                    </ul>
                </span></h4>
            <h5 class="text-muted text-left">Supermercado</h6>
                <span class="time"><i class="fa fa-clock"></i> 22 min </span>
                <span class="price-content">
                    <span class="dot-separator">●
                </span>
                <!----> $&nbsp;3.450 </span>

        </div>

    </div>
    <div class="grid_item">
        <div class="grid_img" style="background-image: url('./assets/img/categories/restaurantes.jpg')">
        </div>
        <div class="caption">

            <h4 class="text-dark text-left mb-0"><strong>Olimpica</strong><span>
                    <ul class="rating">
                        <li class="fas fa-star"><span class="score"> 4.6 </span></li>
                    </ul>
                </span></h4>
            <h5 class="text-muted text-left">Supermercado</h6>
                <span class="time"><i class="fa fa-clock"></i> 22 min </span>
                <span class="price-content">
                    <span class="dot-separator">●
                </span>
                <!----> $&nbsp;3.450 </span>

        </div>

    </div>
    <div class="grid_item">
        <div class="grid_img" style="background-image: url('./assets/img/categories/restaurantes.jpg')">
        </div>
        <div class="caption">

            <h4 class="text-dark text-left mb-0"><strong>Olimpica</strong><span>
                    <ul class="rating">
                        <li class="fas fa-star"><span class="score"> 4.6 </span></li>
                    </ul>
                </span></h4>
            <h5 class="text-muted text-left">Supermercado</h6>
                <span class="time"><i class="fa fa-clock"></i> 22 min </span>
                <span class="price-content">
                    <span class="dot-separator">●
                </span>
                <!----> $&nbsp;3.450 </span>

        </div>

    </div>
    <div class="grid_item">
        <div class="grid_img" style="background-image: url('./assets/img/categories/restaurantes.jpg')">
        </div>
        <div class="caption">

            <h4 class="text-dark text-left mb-0"><strong>Olimpica</strong><span>
                    <ul class="rating">
                        <li class="fas fa-star"><span class="score"> 4.6 </span></li>
                    </ul>
                </span></h4>
            <h5 class="text-muted text-left">Supermercado</h6>
                <span class="time"><i class="fa fa-clock"></i> 22 min </span>
                <span class="price-content">
                    <span class="dot-separator">●
                </span>
                <!----> $&nbsp;3.450 </span>

        </div>

    </div>
    <div class="grid_item">
        <div class="grid_img" style="background-image: url('./assets/img/categories/restaurantes.jpg')">
        </div>
        <div class="caption">

            <h4 class="text-dark text-left mb-0"><strong>Olimpica</strong><span>
                    <ul class="rating">
                        <li class="fas fa-star"><span class="score"> 4.6 </span></li>
                    </ul>
                </span></h4>
            <h5 class="text-muted text-left">Supermercado</h6>
                <span class="time"><i class="fa fa-clock"></i> 22 min </span>
                <span class="price-content">
                    <span class="dot-separator">●
                </span>
                <!----> $&nbsp;3.450 </span>

        </div>

    </div>

    </div>
    <div class="row">
                      <div class="col-3 mx-auto mt-3">
    <button class="btn btn-primary " type="button">Ver más</button>
                      </div></div>
</div>

@endsection

@section('footer')
@include('system.layouts.global.components.footer')
@endsection