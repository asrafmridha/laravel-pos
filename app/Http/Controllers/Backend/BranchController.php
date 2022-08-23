<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
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
      'email'=>'required|email|max:100', 
      'status'=>'required',


       ]);

       $branch=new Branch;
       $branch->name=$request->name;
       $branch->manager=$request->manager;
       $branch->email=$request->email;
       $branch->phone=$request->phone;
       $branch->status=$request->status;
       $branch->save();

       return redirect()->back()->with('message','Branch information added Successfully');

    
    }

    function managebranch(){

        return view('backend.pages.branch.manage');
    }
}
