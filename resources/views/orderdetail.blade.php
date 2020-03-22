@php 
use Illuminate\Support\Facades\Auth;
use App\Product;
@endphp
@extends('layout')
@section('title',"My information")
@section('location',"My information")

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
                    <a class="nav-link " href="{{url('/order-list')}}" >Order list</a>
                </li> 
                                
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="myTabContent">                
                <div class="tab-pane show active" >
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th scope="col">Product	Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_product as $o)                                
                                <tr>                                    
                                    <td>{{Product::find($o->product_id)->product_name}}</td>
                                    <td>$@convert($o->price)</td>
                                    <td>{{$o->qty}}</td>
                                    <td>$0</td>
                                    <td>$@convert($o->price * $o->qty)</td>
                                </tr>                                
                            @endforeach                        
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{url('/order-list')}}" class="btn btn-primary py-3 px-5">Back to your order list</a>
        </div>
    </div>
</div>

@endsection

