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