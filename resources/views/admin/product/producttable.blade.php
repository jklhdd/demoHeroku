@extends('admin/layout')
@section('content')
<div class="row mt">
    <div class="col-md-12">
    <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> Product Table</h4><hr><table class="table table-striped table-advance table-hover">
        
        
        <thead>
            <tr>
            <th><i class="fa fa-bullhorn"></i> ID</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Category Name</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Brand Name</th>
            <th><i class="fa fa-bookmark"></i> Create At</th>
            <th><i class=" fa fa-edit"></i> Update At</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td class="hidden-phone">{{$p->product_name}}</td>
                    <td class="hidden-phone">{{\App\Category::find($p->category_id)->category_name}}</td>
                    <td class="hidden-phone">{{\App\Brand::find($p->brand_id)->brand_name}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>{{$p->updated_at}}</td>
                    <td>
                    <!-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->
                    <a href="{{url('admin/product/edit/'.$p->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('admin/product/delete/'.$p->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                </tr>
            @endforeach                  
        </tbody>
        </table>
        
    </div>
    <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
    <div class="col-md-12 mt"><a href="{{url('admin/product/create')}}">Create new product</a></div>
</div>

@endsection