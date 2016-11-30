@extends('layouts.ecommerce.base')

@section('extra-js')
   <script src="{{ asset('js/backend/laptop/runway_all.js') }}"></script>
@endsection

@section('content')
   <!--prdt-starts-->
   <div class="prdt">
      <div class="container">
         <div class="prdt-top">
            <div class="col-md-3 prdt-right">
               @include('laptop.filterByCompany', ['companies' => $companies])
            </div>
            <div class="col-md-9 prdt-left">
               <div class="product-one" id="row">
                  @foreach($laptops as $laptop)
                  <div class="col-md-4 product-left p-left">
                     <div class="product-main simpleCart_shelfItem">
                        <a href="{{ route('laptop.product', ['id' => $laptop->id]) }}" class="mask">
                           <img class="img-responsive zoom-img" src="{{ asset('storage/product/laptops/').'/'.$laptop->product->image }}" alt="" />
                        </a>
                        <div class="product-bottom">
                           <h3>{{ $laptop->product->name }}</h3>
                           <h4><span class=" item_price">$ {{ $laptop->product->detail->price }}</span></h4>
                        </div>
                        @if(Auth::check())
                           <label style="visibility: hidden;">{{ $var=0  }}</label>
                           @foreach($wish_lists as $wish_list)
                              @if($laptop->id == $wish_list->product_id)
                                 <label style="visibility: hidden;">{{ $var=1 }}</label>
                                 @break
                              @else
                                 <label style="visibility: hidden;">{{ $var=0 }}</label>
                              @endif
                           @endforeach
                           @if($var == 1)
                              <div class="srch" style="top: 3%; right: -15px; display: block;">
                                 <span style="background: transparent;">
                                    <ul class="memenu skyblue">
                                       <li class="active">
                                          <a href="{{ route('user.whish_list_delete', ['id' => $laptop->id]) }}"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>
                                       </li>
                                          </ul>
                                 </span>
                              </div>
                           @else
                              <div class="srch" style="top: 3%; right: -15px;">
                                 <span style="background: transparent;">
                                    <ul class="memenu skyblue">
                                       <li>
                                          <a href="{{ route('user.whish_list', ['id' => $laptop->id]) }}"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>
                                      </li>
                                    </ul>
                                 </span>
                              </div>
                           @endif
                        @else
                           <div class="srch" style="top: 3%; right: -15px;">
                              <span style="background: transparent;">
                                 <ul class="memenu skyblue">
                                    <li>
                                       <a href="{{ route('user.log_in') }}"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>
                                    </li>
                                 </ul>
                              </span>
                           </div>
                        @endif
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