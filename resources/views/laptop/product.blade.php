@extends('layouts.ecommerce.base')

@section('content')
<!--start-single-->
   <div class="single contact" style="padding-bottom: 2em">
      <div class="container">
         <div class="single-main" style="width: 90%; margin: 0 auto;">
            <div class="col-md-12 single-main-left">
            <div class="sngl-top">
               <div class="col-md-5 single-top-left">
                  <div class="thumb-image" style="border: 1px solid #D1CFCF;"> <img src="{{ asset('storage/product/laptops/single/').'/'.$laptop->product->image }}" data-imagezoom="true" class="img-responsive"/></div>
               </div>
               <div class="col-md-7 single-top-right">
                  <div class="single-para simpleCart_shelfItem">
                     <h2>{{ $laptop->product->name }}</h2>
                     <h5 class="item_price">$ {{ $laptop->product->detail->price }}</h5>
                     <ul class="memenu skyblue">
                        @if(Auth::check())
                           <li class=""><a href="#"><i class="fa fa-heart-o" aria-hidden="true" style="color: red;"></i> Lista de deseos</a></li></ul>
                        @else
                           <li class=""><a href="{{ route('user.log_in') }}"><i class="fa fa-heart-o" aria-hidden="true" style="color: red;"></i> Lista de deseos</a></li></ul>
                        @endif
                     <ul class="tag-men">
                        <div class="specifications">
                           <div class="detai-tabs">
                              <!-- Nav tabs -->
                              <ul class="nav nav-pills tab-details">
                                 <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descripcion</a></li>
                                 <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Terminos & condiciones</a></li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="panel-body">
                                       <div class="row">
                                          <table class="table table-responsive">
                                             <tbody>
                                                <tr>
                                                   <td>Sistema Operativo :</td>
                                                   <td>{{ $laptop->operating_system }}</td>
                                                <tr>
                                                <tr>
                                                   <td>Procesador :</td>
                                                   <td>{{ $laptop->processor }}</td>
                                                <tr>
                                                <tr>
                                                   <td>Pantalla :</td>
                                                   <td>{{ $laptop->display }}</td>
                                                <tr>
                                                <tr>
                                                   <td>Memoria :</td>
                                                   <td>{{ $laptop->memory }}</td>
                                                <tr>
                                                <tr>
                                                   <td>Bateria :</td>
                                                   <td>{{ $laptop->battery_life }}</td>
                                                <tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane" id="messages">
                                    Los pedidos se limitan a 5 ordenadores por cliente.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>
               </div>
               <div class="clearfix"> </div>
            </div>
         </div>
            <div class="clearfix"> </div>
         </div>
      </div>
   </div>
   <!--end-single-->
   <!--product-starts-->
   <div class="about" style="padding-top: 0em; padding-bottom: 0em;">
      <div class="container">
         <div class="center-text" style="font-family: 'Lora-Regular'; text-align: center; color: #000000; text-transform: uppercase;">
            <h3>Productos Relacionados</h3>
         </div>
         <div class="product-top">
            <div class="product-one">
               @foreach($related_products as $related_product)
               <div class="col-md-3 product-left">
                  <div class="product-main simpleCart_shelfItem">
                     <a href="{{ route('laptop.product', ['id' => $related_product->id]) }}" class="mask"><img class="img-responsive zoom-img" src="{{ asset('storage/product/laptops/').'/'.$related_product->product->image }}" alt="" /></a>
                     <div class="product-bottom">
                        <h3>{{ $related_product->product->name }}</h3>
                        <h4><span class=" item_price">$ 329</span></h4>
                     </div>
                     <div class="srch">
                        <span>-50%</span>
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
@endsection