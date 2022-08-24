<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Product;
use Dotenv\Repository\RepositoryInterface;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
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
}
