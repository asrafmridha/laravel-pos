<?php

namespace App\Http\Controllers;

use App\Models\Backend\Branch;
use App\Models\Backend\Product;
use App\Models\Backend\Purchase;
use App\Models\Stock;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
       function purchaseview(){
        $branch=Branch::all();
        return view('backend.purchase.addpurchaseview',compact('branch'));
       }

       function costprice($id){
        
        
        $stockview=Product::find($id);
        $stock=Stock::where('product_id',$id)->get();
        
        if($stockview != null){
          return response()->json([
            
            'status'=>'success',
            'data'=>$stockview,
            'stock'=>$stock
          

         ]);
        }
        else{

          return response()->json([
            'status'=>'empty'

         ]);
        }
        
        

       }

       function purchasestore(Request $request){

        $purchasestore= new Purchase;
        $purchasestore->date              =$request->date;
        $purchasestore->branch_id         =$request->branch_id;
        $purchasestore->company_name      =$request->company_name;
        $purchasestore->invoice           =$request->invoice;
        $purchasestore->discount          =$request->discount;
        $purchasestore->discount_ammount   =$request->discount_amount;
        $purchasestore->product_id        =$request->product_id;
        $purchasestore->total_ammount      =$request->grand_amount;

        $stock= Stock::find($request->product_id);
          
        if($stock!=null){
         $stock->quantity = $request->quantity+$stock->quantity;
         $stock->update();
  
        }
      
        

    
         


        $purchasestore->save();




        return response()->json([

         "status"=>"success"

        ]);

       }
}
