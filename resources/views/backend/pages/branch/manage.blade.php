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
            @foreach($branch as $branch)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                   
                </td>
                <td>
                    <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            
            @endforeach
       </table>
    @endsection