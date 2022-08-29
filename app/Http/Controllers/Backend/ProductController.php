<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use App\Models\Backend\Product;
use App\Models\Stock;
use Dotenv\Repository\RepositoryInterface;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    function dashboard(){

        $stock= DB::table('stocks')->sum('quantity');
         $branch=Branch::count('name');
        return view('backend.dashboard',compact('stock','branch'));
    }



    function productaddview(){

      
        return view('backend.pages.product.manage');
    }

    function addproduct(Request $request){

        $validator=Validator::make($request->all(),[

            'name'=>'required',
             'description'=>'required',
             'size'=>'required',
             'product_code'=>'required',
             'color'=>'required',
             'cost_price'=>'required',
             'sale_price'=>'required'
            
    
           ]);
    
           if ($validator->fails())
           {
               return response()->json([
                'status'=>'failed',
                'errors'=>$validator->messages()
    
               ]);    
           }
           else{

        $addproduct= new Product;
        $addproduct->name=$request->name;
        $addproduct->description=$request->description;
        $addproduct->size=$request->size;
        $addproduct->color=$request->color;
        $addproduct->product_code=$request->product_code;
        $addproduct->cost_price=$request->cost_price;
        $addproduct->sale_price=$request->sale_price;

        $addproduct->save();
        return response()->json([
            'status'=>'success'
            

           ]); 
        
           }

    }

    function productview(){

        $productview=Product::all();

        return response()->json([

            'data'=>$productview

        ]);


    }

    // function for deleteproduct

    function deleteproduct($id){
   
    $deleteproduct=Product::find($id);
    $deleteproduct->delete();

    return response()->json([

        'status'=>'success'
    ]);

    }

    function updateshow($id){
       $updateshow=Product::find($id);
       return response()->json([

          'status'=>$updateshow
       ]);


    }
  
    function updateproduct(Request $request, $id){

        
        $updateproduct= Product::find($id);
        $updateproduct->name=$request->uname;
        $updateproduct->description=$request->udescription;
        $updateproduct->size=$request->usize;
        $updateproduct->color=$request->ucolor;
        $updateproduct->product_code=$request->uproduct_code;
        $updateproduct->cost_price=$request->ucost_price;
        $updateproduct->sale_price=$request->usale_price;

        $updateproduct->update();

        return response()->json([

            'status'=>'success'
        ]);
        


    }


}
