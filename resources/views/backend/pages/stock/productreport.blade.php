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
            <?php $slNo=1;?>
        @foreach ($stock as $item)
        <tr>
            <td>{{$slNo}}</td>
            <td>{{ $item->branch_info->name}}</td>
            <td>{{ $item->branch_info->manager}}</td>
            <td>{{$item->product_info->cost_price}}</td>
             <td>{{$item->product_info->sale_price}}</td>
            <td>{{$item->quantity}}</td>
            
           
        </tr>

        <?php $slNo++ ;?>

        @endforeach
    
  
        

   </table>
       
    @endsection