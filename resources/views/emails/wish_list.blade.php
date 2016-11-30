@extends('emails.ecommerce.base')

@section('content')
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
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
@endsection