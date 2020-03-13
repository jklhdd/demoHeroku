@extends('admin/layout')
@section('content')
<div class="row mt">
    <div class="col-md-12">
    <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> Brand Table</h4><hr><table class="table table-striped table-advance table-hover">
        
        
        <thead>
            <tr>
            <th><i class="fa fa-bullhorn"></i> ID</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
            <th><i class="fa fa-bookmark"></i> Create At</th>
            <th><i class=" fa fa-edit"></i> Update At</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($brand as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td class="hidden-phone">{{$b->brand_name}}</td>
                    <td>{{$b->created_at}}</td>
                    <td>{{$b->updated_at}}</td>
                    <td>
                    <!-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                </tr>
            @endforeach                  
        </tbody>
        </table>
        
    </div>
    <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
    <div class="col-md-12 mt"><a href="{{url('admin/brand/create')}}">Create new brand</a></div>
</div>

@endsection