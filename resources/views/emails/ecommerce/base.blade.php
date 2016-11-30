<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!--Custom-Theme-files-->
      <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet"/>
      <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"/>
   </head>
   <body>
   <!--start-logo-->
   <div class="logo">
      <div class="container">
         <div class="row">
            <div class="pull-left">
               <img style="width: 230px;" class="img-responsive" src="{{ asset('images/logo.png') }}" alt=""/>
            </div>
         </div>
      </div>
   </div>
   <!--start-logo-->
   <!--content-->
   <div class="content">
      <div class="container">
         @yield('content')
      </div>
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
   </body>
</html>