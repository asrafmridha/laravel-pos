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
            <td>'+item.product_code+'</td>\
            <td>'+item.name+'</td>\
            <td>'+item.cost_price+'</td>\
            <td>'+item.sale_price+'</td>\
            <td><button id="updatebtn" value="'+item.id+'" class="updatebtn btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#updateeemployee"><i class="fa fa-edit"></i></button>\
              <button value="'+item.id+'" class="deleteid btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteproduct"><i class="fa fa-trash"></i></button></td>\
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

          
           jQuery(".msg").show().text("Data Saved");
           jQuery(".msg").fadeOut(1000);
          }
          
              
        }
    });
    
    
    
  });

});










 

