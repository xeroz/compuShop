<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>CompuShop</title>
      <!--Custom-Theme-files-->
      <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet"/>
      <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"/>
      <link href="{{ URL::asset('css/memenu.css') }}" rel="stylesheet"/>
      <link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet"/>
      <link href="{{ URL::asset('css/owl.theme.css') }}" rel="stylesheet"/>
      <link href="{{ URL::asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet"/>
   </head>
   <body>
   <!--start-logo-->
   <div class="logo">
      <a style="width: 230px; display: block; margin: auto;" href="{{ route('home') }}"><img class="img-responsive" src="{{ asset('images/logo.png') }}" alt=""/></a>
   </div>
   <!--start-logo-->
   <!--bottom-header-->
   <div class="header-bottom">
      <div class="container">
         @include('layouts.ecommerce.main')
      </div>
   </div>
   <!--content-->
   <div class="content">
      @yield('content')
   </div>
   <!--content-ends-->
   <!--footer-starts-->
   <div class="footer">
      <div class="container">
         <div class="footer-top">
            <div class="col-md-12 footer-right">
               <p> 2016</p>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   <!--footer-end-->
   <!--script-->
   <script src="{{ URL::asset('js/script.js') }}"></script>
   <!--jquery-->
   <script src="{{ URL::asset('js/jquery-1.11.0.min.js') }}"></script>
   <!--owl.carousel-->
   <script src="{{ URL::asset('js/owl.carousel.js') }}"></script>
   <!--app-->
   <script src="{{ URL::asset('js/app.js') }}"></script>
   <!--bootstrap-->
   <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
   <!--simpleCart-->
   <script src="{{ URL::asset('js/simpleCart.min.js') }}"></script>
   <!--memenu-->
   <script src="{{ URL::asset('js/memenu.js') }}"></script>
   <!--menu-->
   <script src="{{ URL::asset('js/menu.js') }}"></script>
   <!--jquery.easydropdown-->
   <script src="{{ URL::asset('js/jquery.easydropdown.js') }}"></script>
   <!--responsiveslides-->
   <script src="{{ URL::asset('js/responsiveslides.min.js') }}"></script>
   <!--slider-->
   <script src="{{ URL::asset('js/slider.js') }}"></script>
   <!--imagezoom-->
   <script src="{{ URL::asset('js/imagezoom.js') }}"></script>
   <!--url-->
   <script> var base_url = "{{ url('/') }}"; </script>
   <!--extra-js-->
   @yield('extra-js')
   </body>
</html>