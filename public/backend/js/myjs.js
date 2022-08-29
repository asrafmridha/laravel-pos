jQuery(document).ready(function(){
   show();
  function show(){

    $.ajax({
      type: "GET",
      url: "/product/productview",
      dataType: "JSON",
      success: function (response) {

        var data= "";
        $.each(response.data, function (key, item) { 
          data+='<tr>\
          <td>'+item.id+'</td>\
            <td>'+item.product_code+'</td>\
            <td>'+item.name+'</td>\
            <td>'+item.cost_price+'</td>\
            <td>'+item.sale_price+'</td>\
            <td><button id="updatebtn" value="'+item.id+'" class="updateid btn btn-success btn-sm" data-toggle="modal" data-target="#updateModal"><i class="fa fa-edit"></i></button>\
              <button value="'+item.id+'" class="deleteid btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button></td>\
          </tr>';
          
        });
        jQuery(".data").html(data);
        
      }
    });

  }



     




  jQuery('.btn-add').click(function() { 
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
     });
    var name=jQuery('.name').val();
    var description=jQuery('.des').val();
    var size=jQuery('.size').val();
    var color=jQuery('.color').val();
    var product_code=jQuery('.product_code').val();
    var cost_price =jQuery('.cost_price ').val();
    var sale_price =jQuery('.sale_price ').val();


    $.ajax({
        type: "POST",
        url: "/product/productadd",
        dataType: "JSON",
        data:{
            name:name,
            description:description,
            size:size,
            color:color,
            product_code:product_code,
            cost_price:cost_price,
            sale_price:sale_price

        },
        
        success: function (response) {

          if(response.status=="failed"){
              
            jQuery(".error_name").text(response.errors.name);
            jQuery(".error_des").text(response.errors.description);
            jQuery(".error_size").text(response.errors.size);
            jQuery(".error_color").text(response.errors.color);
            jQuery(".error_product_code").text(response.errors.product_code);
            jQuery(".error_cost_price").text(response.errors.cost_price);
            jQuery(".error_sale_price").text(response.errors.sale_price);
            jQuery(".error_product_code").text(response.errors.product_code);

          }
          else{

          show();
           jQuery(".msg").show().text("Data Saved");
           jQuery(".msg").fadeOut(1000);
           jQuery('.name').val("");
           jQuery('.des').val("");
           jQuery('.size').val("");
           jQuery('.color').val("");
           jQuery('.product_code').val("");
           jQuery('.cost_price ').val("");
           jQuery('.sale_price ').val("");
          }
          
              
        }
    });
    
    
    
  });


          // for get id from current button and pass into modal button
        jQuery(document).on("click",".deleteid",function(){
          var id= jQuery(this).val();
          jQuery('.deletemodal').val(id);

        });


   //for delete
  jQuery(document).on("click",".deletemodal",function(){
   
       var id=jQuery(this).val();
        
       $.ajax({
        type: "GET",
        url: "/product/deleteproduct/"+id,
        dataType: "JSON",
        success: function (response) {
          show();
          jQuery("#deleteModal").modal("hide");
          
        }
       });
        

  });


  // for update Show Product 
     jQuery(document).on("click",".updateid",function(){
      var id=jQuery(this).val();
       jQuery(".updateemodal").val(id);
    $.ajax({
      type: "GET",
      url: "/product/updateshow/"+id,
      data: "data",
      dataType: "JSON",
      success: function (response) {
   
         jQuery(".uname").val(response.status.name);
         jQuery(".udes").val(response.status.description);
         jQuery(".usize").val(response.status.size);
         jQuery(".ucost_price").val(response.status.cost_price);
         jQuery(".usale_price").val(response.status.sale_price);
         jQuery(".uproduct_code").val(response.status.product_code);
         jQuery(".ucolor").val(response.status.color);
         
        
        
      }
    });


     });

     //for update product By modal

     jQuery(document).on("click",".updateemodal",function(){

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
       });

       var id=jQuery(this).val();
       var uname=jQuery('.uname').val();
       var udescription=jQuery('.udes').val();
       var usize=jQuery('.usize').val();
       var ucolor=jQuery('.ucolor').val();
       var uproduct_code=jQuery('.uproduct_code').val();
       var ucost_price =jQuery('.ucost_price ').val();
       var usale_price =jQuery('.usale_price ').val();

      $.ajax({
        type: "POST",
        url: "/product/updateproduct/"+id,
        dataType: "JSON",
        data:{
          uname:uname,
          udescription:udescription,
          usize:usize,
          ucolor:ucolor,
          uproduct_code:uproduct_code,
          ucost_price:ucost_price,
          usale_price:usale_price


        },
        success: function (response) {
        
          show();
          jQuery("#updateModal").modal("hide");
          jQuery(".msg").show().text("Data Updated");
          jQuery(".msg").fadeOut(1000);
          
          
        }
      });







     });

});










 

