<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
   
    function addbranchview(){

        return view("backend.pages.branch.add");
    }

    function addbranch(Request $request){

       $request->validate([

      'name'=>'required|min:5',
      'manager'=>'required',
      'phone'=>'required',
      'email'=>'required|email|unique:posts|max:100', 
      'status'=>'required',


       ]);
    
    }
}
