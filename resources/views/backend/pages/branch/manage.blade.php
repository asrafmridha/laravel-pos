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
                    <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    <button data-bs-toggle="modal" data-bs-target="#deletebranchmodal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                </td>
            </tr>

            <?php  $sl++; ?>


      
  <!-- Modal For delete Branch-->
  <div class="modal fade" id="deletebranchmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
      Are you confirm Delete this?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
























































            @endforeach

    
           
       </table>
    @endsection