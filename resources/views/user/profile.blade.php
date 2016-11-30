@extends('layouts.ecommerce.base')

@section('content')
<!--start-breadcrumbs-->
   <div class="breadcrumbs" style="background: #f0f0f0; font-family: 'Lato-Regular';">
      <div class="container">
         <h1>Bienvenido {{ Auth::user()->name }} {{ Auth::user()->lastname }}</h1>
      </div>
   </div>
<!--end-breadcrumbs-->
<!--start-profile-->
   <div class="single contact" style="padding-bottom: 12em; padding-top: 3em;">
      <div class="container">
         <div class="single-main" style="width: 90%; margin: 0 auto;">
            <div class="col-md-12 single-main-left">
            <div class="sngl-top">
               <div class="specifications">
                  <div class="detai-tabs">
                     <!-- Nav tabs -->
                     <ul class="nav nav-pills tab-details" style="border-bottom: 1px solid #73B6E1;">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Perfil de Usuario</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Lista de deseos</a></li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                           <div class="panel-body">
                              <div class="col-md-3">
                                 <h1><i style="color: #333;" class="fa fa-user-circle fa-5x" aria-hidden="true"></i></h1>
                              </div>
                              <div class="col-md-6">
                                 <form class="form-horizontal" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                       <div class="col-sm-12">
                                          <input type="email" class="form-control" name="email" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-sm-12">
                                          <input type="email" class="form-control" name="email" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-sm-12">
                                          <input type="email" class="form-control" name="email" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-sm-12">
                                          <input type="email" class="form-control" name="email" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-sm-3">
                                          <button class="btn btn-account">Ingresar</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                           <div class="panel-body">
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                         <th>Producto</th>
                                         <th>Precio Unidad</th>
                                         <th>Stock</th>
                                         <th></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($wish_list_products as $wish_list_product)
                                          <tr>
                                             <td style="vertical-align: middle;">{{ $wish_list_product->name }}</td>
                                             <td style="vertical-align: middle;">{{ $wish_list_product->price }}</td>
                                             @if($wish_list_product->stock == 0)
                                                <td style="vertical-align: middle;">Agotado</td>
                                             @else
                                                <td style="vertical-align: middle;">Disponible</td>
                                             @endif
                                             <td>
                                                <a href="{{ route('user.whish_list_delete', ['id' => $wish_list_product->id]) }}"><i class="fa fa-trash fa-3x" aria-hidden="true"></i></a>
                                             </td>
                                          </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                              </div>
                              <div class="row">
                                 <div class="pull-right">
                                    <a class="btn btn-account" href="{{ route('emails.send_wish_list', ['id' => Auth::user()->id]) }}"><i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            <div class="clearfix"> </div>
         </div>
      </div>
   </div>
   <!--end-profile-->
@endsection