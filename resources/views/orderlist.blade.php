@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layout')
@section('title',"Order List")
@section('location',"Order List")

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-3">
            <h3>Profile information</h3>
        </div>        
    </div>

    <div class="row my-4 ">
        <div class="col-md-3">
            
            <ul class="nav flex-column nav-tabs" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link " href="{{url('/information')}}" >Profile information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="order-tab" data-toggle="tab" href="#" role="tab" aria-controls="order" aria-selected="true">Order list</a>
                </li> 
                                
            </ul>
        </div>
        <div class="col-md-9">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Total money</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $o)
                        <tr>
                            <td><a href="{{url('order/'.$o->id)}}">{{$o->id}}</a></th>
                            <td>{{$o->created_at}}</td>
                            <td>$@convert($o->grand_total)</td>
                            <td>{{$o->status}}</td>
                        </tr>
                    @endforeach                        
                </tbody>
            </table>
            
        </div>
    </div>
</div>

@endsection

