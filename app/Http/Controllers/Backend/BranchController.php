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

        $branchalldata=Branch::all();

        return view('backend.pages.branch.manage',compact('branchalldata'));
    }

    function status($id){
        $brancstatus=Branch::find($id);

         if($brancstatus->status==1){
            $brancstatus->status=2;
         }
         else{
            $brancstatus->status=1;
         }
         $brancstatus->update();
         if($brancstatus->status==1){
            return redirect()->back()->with('message','Active');
         }
         else{
            return redirect()->back()->with('message','Inactive');

         } 

    }

    function deletebranch($id){

        $branchdelete=Branch::find($id);
        $branchdelete->delete();
        return redirect()->back()->with('message','Delete Successfully');
    }
    
  function editbranchview($id){
   $editbranch= Branch::find($id);
   return view("backend.pages.branch.editbranchview",compact('editbranch'));


  }

     function editbranch(Request $request, $id){
      $editbranchdata= Branch::find($id);

      $editbranchdata->name=$request->name;
      $editbranchdata->manager=$request->manager;
      $editbranchdata->email=$request->email;
      $editbranchdata->phone=$request->phone;
      $editbranchdata->status=$request->status;
      $editbranchdata->update();

      return redirect()->back()->with('message','Branch information Update Successfully');


     }
}
