@extends('backend.mastaring.master')
    @section('asraf')
       <table class="table">
            <tr>
                <th>#sl no</th>
                <th>Branch Name</th>
                <th>Branch Manager Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Active</th>
            </tr>
          <?php $sl=1; ?>
            @foreach($branchalldata as $branch) 
            <tr>
                <td>{{$sl}}</td>
                <td>{{$branch->name}}</td>
                <td>{{$branch->manager}}</td>
                <td>{{$branch->phone}}</td>
                <td>{{$branch->email}}</td>
                <td>
                    @if ($branch->status==1)
                    <a href="{{Route('status',$branch->id)}}" class="btn btn-info btn-sm">Active</a>
    
                      @else
                      <a href="{{Route('status',$branch->id)}}" class="btn btn-danger btn-sm">Inactive</a>
                     
                  @endif
    
                </td>
                <td>
                    <button href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
                    <a href="{{Route('deletebranch',$branch->id)}}"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>

            <?php  $sl++; ?>
            @endforeach
   
       </table>
    @endsection