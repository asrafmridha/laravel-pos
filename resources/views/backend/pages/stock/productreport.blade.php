@extends('backend.mastaring.master')
    @section('asraf')

    <table class="table">
        <tr>

           
                
            
            <th>#sl no</th>
            <th>Branch Name</th>
            <th>Branch Manager Name</th>
            <th>Cost_Price</th>
            <th>Sale_Price</th>
            <th>Quantity</th>
          
        </tr>

        @foreach ($stock as $stock)
        <tr>
            <td>{{1}}</td>
            <td>{{ $stock->branch_info->name}}</td>
            <td>{{ $stock->branch_info->manager}}</td>
            <td>{{$stock->branch_info->cost_price}}</td>
            <td>{{$stock->product_info->sale_Price}}</td>
            <td>{{$stock->quantity}}</td>
            
           
        </tr>
        @endforeach
    
  
        

   </table>
       
    @endsection