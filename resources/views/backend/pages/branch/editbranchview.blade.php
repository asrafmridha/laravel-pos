@extends('backend.mastaring.master')
    @section('asraf')
       <div class="col-md-6">
          <form action="{{Route('editbranch',$editbranch->id)}}" method="POST"> 
               @csrf
                <input value="{{$editbranch->name}}" type="text" name="name" placeholder="Enter Branch Name" class="mt-3 form-control">
            
                <input value="{{$editbranch->manager}}" type="text" name="manager" placeholder="Enter Manager Name" class="mt-3 form-control">

                <input value="{{$editbranch->phone}}" type="text" name="phone" placeholder="Enter phone Number" class="mt-3 form-control">

        
    
                <input value="{{$editbranch->email}}" type="text" name="email" placeholder="Enter Email" class="mt-3 form-control">

            
                <select name="status" class="mt-3 form-control">
                    <option value="{{$editbranch->status}}">-----Select Status-----</option>
                    <option value="1" @if($editbranch->status==1) selected @endif  >Active</option>
                    <option value="2" @if($editbranch->status==2) selected @endif >Inactive</option>
                </select>
               
                <button type="submit" class="mt-3 btn btn-success form-control">Edit Branch</button>
            </form>
       </div>
    @endsection

    
        