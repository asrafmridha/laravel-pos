<?php

namespace App\Http\Controllers;

use App\Models\Backend\Branch;
use App\Models\Backend\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
       function purchaseview(){
        $branch=Branch::all();
        return view('backend.purchase.addpurchaseview',compact('branch'));
       }

       function costprice($id){
        
        $stockview=Product::where('cost_price',$id)->first();

        if($stockview != null){
          return response()->json([
            
            'status'=>'success',
            'data'=>$stockview

         ]);
        }
        else{

          return response()->json([

            'status'=>'empty'

         ]);
        }
        

       }
}
