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

      'name'=>'required',
      'manager'=>'required',
      'phone'=>'required',
      'email'=>'required|unique:posts|email|max:100', 
      'status'=>'required',


       ]);
    
    }
}
