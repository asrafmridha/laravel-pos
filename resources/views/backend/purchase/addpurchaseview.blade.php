@extends('backend.mastaring.master')
    @section('asraf')
      
    <div class="col-md-6">
      <input type="date" class="mt-3 form-control date">
      <select class="mt-3 form-control branch_id">
          <option value="">-----Select Branch-----</option>
         @foreach ($branch as $branch)
         <option value="{{$branch->id}}">{{$branch->name}}</option>
         @endforeach
          
         
      </select>
      <input type="text" class="mt-3 company_name form-control" placeholder="Enter Company Name">
      <input type="text" class="mt-3 invoice form-control" placeholder="Enter invoice Number">
      <input readonly type="text" class="mt-3 astock form-control" placeholder="Stock">

     </div>
     <div class="col-md-6">

      <input type="text" class="mt-3 form-control product_id" placeholder="Enter Product id">

      <input readonly type="text" class="mt-3 form-control cost_price" placeholder="Cost Price">
     

        <input type="text" class="mt-3 form-control quantity" placeholder="Enter Quantity">

          <input readonly type="text" class="mt-3 form-control total_amount" placeholder=" total Amount">

          <input type="text" class="mt-3 form-control discount" placeholder="Enter discount">

          
          
          <input readonly type="text" class="mt-3 form-control discount_amount" placeholder="dis_amount">

          <input readonly type="text" class="mt-3 form-control grand_amount" placeholder=" Grand Amount">

          
          
          <button class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>
      </div>


    @endsection