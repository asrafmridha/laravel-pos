@extends('backend.mastaring.master')
    @section('asraf')
       <div class="col-md-6">
            <form action="" method="">
                @csrf
                
                <input value="" type="text" name="name" placeholder="Enter Branch Name" class="mt-3 form-control">
                <span class="text-danger">
                   
                </span>
                <input value="{{ old('manager') }}" type="text" name="manager" placeholder="Enter Branch Name" class="mt-3 form-control">
               
                <input value="{{ old('phone') }}" type="text" name="phone" placeholder="Enter Branch Name" class="mt-3 form-control">
               
                <input value="{{ old('email') }}" type="text" name="email" placeholder="Enter Branch Name" class="mt-3 form-control">
                
                <select name="status" class="mt-3 form-control">
                    <option value="">-----Select Status-----</option>
                    <option value="1"  >Active</option>
                    <option value="2" >Inactive</option>
                </select>
               
                <button class="mt-3 btn btn-success form-control">Add Branch</button>
            </form>
       </div>
    @endsection
        