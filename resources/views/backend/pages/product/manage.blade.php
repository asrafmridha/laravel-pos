@extends('backend.mastaring.master')
    @section('asraf')

    <div class="col-md-4">
      <span class="alert alert-success msg" style="display:none"></span>
      <input placeholder="Enter Product Name" type="text" class="name form-control mt-3">
      <span class="text-danger error_name"></span>
      <textarea placeholder="Enter Description" type="text" class="des form-control mt-3"></textarea>
      <span class="text-danger error_des"></span>
      <select  class="size form-control mt-2">
        <option >-----SELECT-------</option>
        <option value="XXL">XXL</option>
        <option value="XL">XL</option>
        <option value="L">L</option>
        <option value="M">M</option>
      </select>
      <span class="text-danger error_size"></span>
      <input type="color" class="color form-control mt-3">
      <span class="text-danger error_color"></span>
      <input placeholder="Enter Code " type="text" class="product_code form-control mt-3">
      <span class="text-danger error_product_code"></span>
      <input placeholder="Enter Cost Price" type="number" class="cost_price form-control mt-3">
      <span class="text-danger error_cost_price"></span>
      <input placeholder="Enter Sale Price" type="number" class="sale_price form-control mt-3">
      <span class="text-danger error_sale_price"></span>
      <button class="btn-add btn btn-success form-control mt-3">Add Product</button>
 </div>
     
       <div class="col-md-8">
            <table class="table">
               <thead>
                    <tr>
                       <th>Product Id</th>
                        <th>Product Code</th>
                        <th>Name</th>
                        <th>Cost Price</th>
                        <th>Sale Price</th>
                        <th >Action</th>
                    </tr>
               </thead>
               <tbody class="data">
                    
               </tbody>
            </table>
       </div>






<!-- Modal For Delete Product -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are You Sure Want to Delete this Product?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="deletemodal btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal For Update Product -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        
          <input placeholder="Enter Product Name" type="text" class="uname form-control mt-3">
        
          <textarea placeholder="Enter Description" type="text" class="udes form-control mt-3"></textarea>
          <span class="text-danger error_des"></span>
          <input placeholder="Enter Product Size" type="text" class="usize form-control mt-3">
          
          <input type="color" class="ucolor form-control mt-3">
          <span class="text-danger error_color"></span>
          <input placeholder="Enter Code " type="text" class="uproduct_code form-control mt-3">
          
          <input placeholder="Enter Cost Price" type="number" class="ucost_price form-control mt-3">
          
          <input placeholder="Enter Sale Price" type="number" class="usale_price form-control mt-3">
          
  
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="updateemodal btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>


















    @endsection

    

        
        

    