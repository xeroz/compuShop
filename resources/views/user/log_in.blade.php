@extends('layouts.ecommerce.base')

@section('content')
<!--start-single-->
   <div class="single contact" style="padding: 8em 0px;">
      <div class="container">
         <div class="single-main" style="width: 40%; margin: 0 auto;">
            <div class="b_sidebar">
               <div class="w_sidebar">
                  <section  class="sky-form">
                     <h4 align="center">Iniciar Sesión</h4>
                     <div class="account">
                        <div class="col col-4">
                           <form class="form-horizontal" method="POST">
                              {{ csrf_field() }}
                              <div class="form-group">
                                 <div class="col-sm-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-12">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-12">
                                    <button class="btn btn-account">Ingresar</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
   </div>
   <!--end-single-->
@endsection