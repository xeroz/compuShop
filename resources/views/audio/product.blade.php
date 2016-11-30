@extends('layouts.ecommerce.base')

@section('content')
<!--start-single-->
   <div class="single contact">
      <div class="container">
         <div class="single-main" style="width: 90%; margin: 0 auto;">
            <div class="col-md-12 single-main-left">
            <div class="sngl-top">
               <div class="col-md-5 single-top-left">
                  <div class="thumb-image" style="border: 1px solid #D1CFCF;"> <img src="{{ asset('storage/product/audio/single/').'/'.$audio->product->image }}" data-imagezoom="true" class="img-responsive"/></div>
               </div>
               <div class="col-md-7 single-top-right">
                  <div class="single-para simpleCart_shelfItem">
                     <h2>{{ $audio->product->name }}</h2>
                     <h5 class="item_price">$ {{ $audio->product->detail->price }}</h5>
                     <p>Lista de deseos</p>
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
                                                   <td>Conexión :</td>
                                                   <td>{{ $audio->connection }}</td>
                                                <tr>
                                                <tr>
                                                   <td>Bateria :</td>
                                                   <td>{{ $audio->batteries }}</td>
                                                <tr>
                                                <tr>
                                                   <td>Altura :</td>
                                                   <td>{{ $audio->height }}</td>
                                                <tr>
                                                <tr>
                                                   <td>Peso :</td>
                                                   <td>{{ $audio->weight }}</td>
                                                <tr>
                                                <tr>
                                                   <td>Form Factor :</td>
                                                   <td>{{ $audio->form_factor }}</td>
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
@endsection