@extends('admin/layout')
@section('content')
<div class="row mt">
    <div class="col-md-12">
    <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> User Table</h4><hr><table class="table table-striped table-advance table-hover">
        
        
        <thead>
            <tr>
            <th><i class="fa fa-bullhorn"></i> ID</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email</th>
            <th><i class=" fa fa-edit"></i> Role</th>
            <th><i class="fa fa-bookmark"></i> Create At</th>
            <th><i class=" fa fa-edit"></i> Update At</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td class="hidden-phone">{{$c->name}}</td>
                    <td class="hidden-phone">{{$c->email}}</td>
                    <td class="hidden-phone">{{$c->role}}</td>
                    <td>{{$c->created_at}}</td>
                    <td>{{$c->updated_at}}</td>
                    <td>
                    <!-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->
                    <a href="{{url('admin/tables/user/update/'.$c->id)}}" class="btn btn-primary btn-xs" 
                    onClick="return confirm('Change role?')"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('admin/tables/user/delete/'.$c->id)}}" class="btn btn-danger btn-xs"
                    onClick="return confirm('Confirm delete?')"><i class="fa fa-trash-o "></i></a>
                    </td>
                </tr>
            @endforeach                  
        </tbody>
        </table>
        
    </div>
    <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
    
</div>

@endsection