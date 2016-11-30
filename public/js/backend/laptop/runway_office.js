$(document).ready(function(){

   var company   = $('#company');
   var row       = $('#row');

   var checkbox_checked = function(){

      var company_id_list = [];
      $("input[type=checkbox]:checked").each(function(){

         var company_id = $(this).val();
         company_id_list.push({"id" : company_id});
      });

      var companies_id = JSON.stringify(company_id_list)

      var url = base_url + '/laptop/filterOfficeByCompany';

      var data = {
         "companies_id": companies_id,
      };

      $.ajax({
         url : url,
         type: 'get',
         data: data,
      }).done(function (data){

         var auth       = data.auth;
         var laptops    = data.laptops;
         var wish_lists = data.wish_lists;
         var check_wish_lists;

         row.html('');
         if(auth == 1){
            $.each(laptops, function(i) {
               check_wish_lists = checkWishLists(wish_lists, laptops[i].id);
               if (check_wish_lists == 1) {
                  row.append(
                  '<div class="col-md-4 product-left p-left">'+
                     '<div class="product-main simpleCart_shelfItem">'+
                        '<a href="'+base_url+'/laptop/product/'+laptops[i].id+'" class="mask">'+
                           '<img class="img-responsive zoom-img" src="'+base_url+'/storage/product/laptops/'+laptops[i].image+'"/>'+
                        '</a>'+
                        '<div class="product-bottom">'+
                           '<h3>'+laptops[i].name+'</h3>'+
                        '  <h4><span class=" item_price">$'+laptops[i].price+'</span></h4>'+
                        '</div>'+
                        '<div class="srch" style="top: 3%; right: -15px; display: block;">'+
                           '<span style="background: transparent;">'+
                              '<ul class="memenu skyblue">'+
                                 '<li class="active">'+
                                    '<a href="'+base_url+'/user/whish_list_delete/'+laptops[i].id+'"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>'+
                                 '</li>'+
                              '</ul>'+
                           '</span>'+
                        '</div>'+
                     '</div>'+
                  '</div>');
               }else{
                  row.append(
                  '<div class="col-md-4 product-left p-left">'+
                     '<div class="product-main simpleCart_shelfItem">'+
                        '<a href="'+base_url+'/laptop/product/'+laptops[i].id+'" class="mask">'+
                           '<img class="img-responsive zoom-img" src="'+base_url+'/storage/product/laptops/'+laptops[i].image+'"/>'+
                        '</a>'+
                        '<div class="product-bottom">'+
                           '<h3>'+laptops[i].name+'</h3>'+
                        '  <h4><span class=" item_price">$'+laptops[i].price+'</span></h4>'+
                        '</div>'+
                        '<div class="srch" style="top: 3%; right: -15px;">'+
                           '<span style="background: transparent;">'+
                              '<ul class="memenu skyblue">'+
                                 '<li>'+
                                    '<a href="'+base_url+'/user/whish_list/'+laptops[i].id+'"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>'+
                                 '</li>'+
                              '</ul>'+
                           '</span>'+
                        '</div>'+
                     '</div>'+
                  '</div>');
               }
            });
         }else{
            $.each(laptops, function(i) {
               row.append(
            '  <div class="col-md-4 product-left p-left">'+
                  '<div class="product-main simpleCart_shelfItem">'+
                     '<a href="'+base_url+'/laptop/product/'+laptops[i].id+'" class="mask">'+
                        '<img class="img-responsive zoom-img" src="'+base_url+'/storage/product/laptops/'+laptops[i].image+'"/>'+
                     '</a>'+
                     '<div class="product-bottom">'+
                        '<h3>'+laptops[i].name+'</h3>'+
                        '<h4><span class=" item_price">$'+laptops[i].price+'</span></h4>'+
                     '</div>'+
                     '<div class="srch" style="top: 3%; right: -15px;">'+
                        '<span style="background: transparent;">'+
                           '<ul class="memenu skyblue">'+
                              '<li>'+
                                 '<a href="'+base_url+'/user/log_in"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>'+
                              '</li>'+
                           '</ul>'+
                        '</span>'+
                     '</div>'+
                  '</div>'+
               '</div>');
            });
         }
      });
   };

   function checkWishLists(wish_lists, laptop_id)
   {
      var check_wish;

      $.each(wish_lists, function(j) {
         if(laptop_id === wish_lists[j].product_id){
            check_wish = 1;
         }
      });
      return check_wish;
   }

   company.change(checkbox_checked);
});