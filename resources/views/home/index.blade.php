@extends('layouts.ecommerce.base')

@section('content')
   <!--banner-starts-->
   <div class="bnr" id="home">
      <div class="container">

         <div  id="top" class="callbacks_container">
         <ul class="rslides" id="slider4">
             <li>
               <img src="{{ asset('images/portada-3.png') }}" alt=""/>
            </li>
            <li>
               <img src="{{ asset('images/portada-4.png') }}" alt=""/>
            </li>
            <li>
               <img src="{{ asset('images/portada-5.png') }}" alt=""/>
            </li>
         </ul>
      </div>
      <div class="clearfix"> </div>
      </div>
   </div>
   <!--banner-ends-->
   <!--about-starts-->
   <div class="about">
      <div class="container">
         <div class="about-top grid-1">
            <div class="col-md-4 about-left">
               <figure class="effect-bubba">
                  <img class="img-responsive" src="{{ asset('images/cat-1.png') }}" alt=""/>
                  <figcaption>
                     <h4>Laptops</h4>
                  </figcaption>
               </figure>
            </div>
            <div class="col-md-4 about-left">
               <figure class="effect-bubba">
                  <img class="img-responsive" src="{{ asset('images/cat-2.png') }}" alt=""/>
                  <figcaption>
                     <h4>Audifonos</h4>
                  </figcaption>
               </figure>
            </div>
            <div class="col-md-4 about-left">
               <figure class="effect-bubba">
                  <img class="img-responsive" src="{{ asset('images/cat-3.png') }}" alt=""/>
                  <figcaption>
                     <h4>Monitores</h4>
                  </figcaption>
               </figure>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   <!--about-end-->
   <!--product-starts-->
   <div class="about" style="padding-top: 0em; padding-bottom: 0em;">
      <div class="container">
         <div class="center-text" style="font-family: 'Lora-Regular'; text-align: center; color: #000000; text-transform: uppercase;">
            <h3>Ultimos Productos</h3>
         </div>
         <div class="product-top">
            <div class="product-one">
               @foreach($lastest_products as $lastest_product)
               <div class="col-md-3 product-left">
                  <div class="product-main simpleCart_shelfItem">
                     <a href="{{ route('audio.product', ['id' => $lastest_product->id]) }}" class="mask">
                        <img class="img-responsive zoom-img" src="{{ asset('storage/product/audio/').'/'.$lastest_product->image }}" alt="" />
                     </a>
                     <div class="product-bottom">
                        <h3>{{ $lastest_product->name }}</h3>
                        <h4><span class=" item_price">$ {{ $lastest_product->price }}</span></h4>
                     </div>
                     <div class="srch-left">
                        <span>NEW</span>
                     </div>
                  </div>
               </div>
               @endforeach
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
   <!--product-end-->
   <!--company-starts-->
   <div class="about" style="padding-top: 0em; padding-bottom: 1em;">
      <div class="container">
         <div class="center-text" style="font-family: 'Lora-Regular'; text-align: center; color: #000000; text-transform: uppercase;">
            <h3>Compañias Asociadas</h3>
         </div>
         <div class="product-top">
            <div class="product-one">
               <div class="row">
                  <div class="span12">
                     <div id="owl-demo" class="owl-carousel">
                        @foreach($companies as $company)
                           <div class="item"><img src="{{ asset('storage/company/').'/'.$company->image }}"></div>
                        @endforeach
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
   <!--company-end-->
@endsection