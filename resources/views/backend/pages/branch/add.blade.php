@extends('backend.mastaring.master')
    @section('asraf')
       <div class="col-md-6">
            <form action="{{Route('addbranch')}}" method="POST">
                @csrf
                @error('name')

                <div class="alert alert-danger">

                    {{$message}}
                </div>
                    
                @enderror
                <input value="" type="text" name="name" placeholder="Enter Branch Name" class="mt-3 form-control">
                @error('manager')

                <div class="alert alert-danger">

                    {{$message}}
                </div>
                    
                @enderror
                <input value="{{ old('manager') }}" type="text" name="manager" placeholder="Enter Manager Name" class="mt-3 form-control">

                @error('phone')

                <div class="alert alert-danger">

                    {{$message}}
                </div>
                    
                @enderror
               
                <input value="{{ old('phone') }}" type="text" name="phone" placeholder="Enter phone Number" class="mt-3 form-control">

                @error('email')

                <div class="alert alert-danger">

                    {{$message}}
                </div>
                    
                @enderror
               
                <input value="{{ old('email') }}" type="text" name="email" placeholder="Enter Email" class="mt-3 form-control">

                @error('status')

                <div class="alert alert-danger">

                    {{$message}}
                </div>
                    
                @enderror
                
                <select name="status" class="mt-3 form-control">
                    <option value="">-----Select Status-----</option>
                    <option value="1" @if (old('status')==1)
                        selected
                    @endif  >Active</option>
                    <option value="2"  @if (old('status')==2)
                    selected
                @endif
                    
                    >Inactive</option>
                </select>
               
                <button type="submit" class="mt-3 btn btn-success form-control">Add Branch</button>
            </form>
       </div>
    @endsection
        