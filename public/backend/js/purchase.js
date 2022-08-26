jQuery(document).ready(function(){

    jQuery(document).on("keyup",".product_id",function(){
     
         
        var product_id=jQuery(this).val();
        $.ajax({
            type: "GET",
            url: "/purchase/costprice/"+product_id,
            dataType: "JSON",
            success: function (response) {
            
            if(response.status=="success"){
             
                jQuery(".cost_price").val(response.data.cost_price);
                
               
            }
            else{
                jQuery(".cost_price").val(null);
                jQuery(".total_amount").val(null);
                jQuery(".grand_amount").val(null);
                jQuery(".discount").val(null);
                jQuery(".discount_amount").val(null);
                jQuery(".quantity").val(null);
              
            }
           
            }
        });
    });

    jQuery(document).on("keyup",".quantity",function(){


        var  quantity= jQuery(this).val();
       
        var cost_price=jQuery(".cost_price").val();
        var total_amount= quantity*cost_price;
        jQuery(".total_amount").val(total_amount);
       });

       jQuery(document).on("keyup",".discount",function(){
  
        var discount=jQuery(this).val();
        var total_amount= jQuery(".total_amount").val();
        var discount_amount= total_amount*discount/100;
        jQuery(".discount_amount").val(discount_amount);
        // var grand_amount=jQuery(".discount_amount").val();
        var grand_amount1=total_amount-discount_amount;
        if(total_amount>discount_amount){
            jQuery(".grand_amount").val(grand_amount1);
            
        } 
        else{
            jQuery(".grand_amount").val(null);
            jQuery(".discount_amount").val(null);
        }

       });

       jQuery(".btn-purchaseAdd").click(function()  { 

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
           });
        
        var date= jQuery(".date").val();
        var branch_id= jQuery(".branch_id").val(); 
        var company_name= jQuery(".company_name").val();
        var invoice= jQuery(".invoice").val();
        var product_id= jQuery(".product_id").val();
        var total_amount= jQuery(".total_amount").val();
        var discount= jQuery(".discount").val();
        var discount_amount= jQuery(".discount_amount").val();
        var grand_amount= jQuery(".grand_amount").val();
        var quantity=jQuery(".quantity").val();


        $.ajax({
            type: "POST",
            url: "/purchase/store",
            dataType: "JSON",
            data: {
                date:date,
                branch_id:branch_id,
                company_name:company_name,
                invoice:invoice,
                total_amount:total_amount,
                discount:discount,
                discount_amount:discount_amount,
                grand_amount:grand_amount,
                product_id:product_id,
                quantity:quantity


            },
            success: function (response) {

                alert("save");
                
            }
        });


       });
        





});