@extends('layouts.ecommerce.base')

section('content')
   <!--prdt-starts-->
   <div class="prdt">
      <div class="container">
         <div class="prdt-top">
            <div class="col-md-3 prdt-right">
               <div class="b_sidebar">
                  <div class="w_sidebar">
                     <section  class="sky-form">
                        <h4>Marcas</h4>
                        <div class="row1 scroll-pane">
                           <div class="col col-4" id="company">
                           @foreach($companies as $company)
                              <label class="checkbox"><input value='{{ $company->id }}' type="checkbox" name="company[]"><i></i>
                                 {{ $company->name }}
                              </label>
                           @endforeach
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
            <div class="col-md-9 prdt-left">
               <div class="product-one" id="row">
                  @foreach($audios as $audio)
                  <div class="col-md-4 product-left p-left">
                     <div class="product-main simpleCart_shelfItem">
                        <a href="{{ route('audio.product', ['id' => $audio->id]) }}" class="mask"><img class="img-responsive zoom-img" src="{{ asset('storage/product/audio/').'/'.$audio->product->image }}" alt="" /></a>
                        <div class="product-bottom">
                           <h3>{{ $audio->product->name }}</h3>
                           <h4><span class=" item_price">$ {{ $audio->product->detail->price }}</span></h4>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   <!--product-end-->
@endsection