   <div class="header">
      <div class="col-md-8 header-left">
         <div class="top-nav">
            <ul class="memenu skyblue"><li class="active"><a href="{{ route('home') }}">Home</a></li>
               <li class="grid"><a href="#">Laptops</a>
                  <div class="mepanel">
                     <div class="row">
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="{{ route('laptop.all') }}" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/todo.jpg') }}" style="border :0px;"><p>Todas Las Laptops</p></a></li>
                           </ul>
                        </div>
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="{{ route('laptop.office') }}" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/hogar-oficina.jpg') }}" style="border :0px;"><p>Oficina</p></a></li>
                           </ul>
                        </div>
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="{{ route('laptop.ultrabooks') }}" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/ultrabook.jpg') }}" style="border :0px;"><p>Ultrabooks</p></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="grid"><a href="#">Audifonos</a>
                  <div class="mepanel">
                     <div class="row">
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="{{ route('audio.all') }}" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/todo-2.jpg') }}" style="border :0px;"><p>Todos Los Audifonos</p></a></li>
                           </ul>
                        </div>
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="{{ route('audio.headphone') }}" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/headphone.png') }}" style="border :0px;"><p>Headphones</p></a></li>
                           </ul>
                        </div>
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="{{ route('audio.earphone') }}" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/earphone.png') }}" style="border :0px;"><p>Earphones</p></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="grid"><a href="#">Monitores</a>
                  <div class="mepanel">
                     <div class="row">
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="#" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/todo-2.jpg') }}" style="border :0px;"><p>Todos Los Monitores</p></a></li>
                           </ul>
                        </div>
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="#" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/lcd.jpg') }}" style="border :0px;"><p>LCD Full HD</p></a></li>
                           </ul>
                        </div>
                        <div class="col1 me-one">
                           <ul>
                              <li><a href="#" style="font-size: 20px; text-align: center;"><img src="{{ asset('images/led.jpg') }}" style="border :0px;"><p>LED</p></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      <div class="clearfix"> </div>
      </div>
      <div class="col-md-4 header-right">
         <div class="search-bar">
            <ul class="memenu skyblue">
               @if(Auth::check())
                  <li><a href="{{ route('user.profile') }}">Usuario</a></li>
                  <li><a href="{{ route('user.logout') }}">Cerrar Sesión</a></li>
               @else
                  <li><a href="{{ route('user.log_in') }}">Iniciar Sesión</a></li>
                  <li><a href="{{ route('user.create') }}">Crear Cuenta</a></li>
               @endif
            </ul>
         </div>
      </div>
      <div class="clearfix"> </div>
   </div>
