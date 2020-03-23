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
            <h3>Order {{$order->id}} detail - {{$order->status}}</h3>
            <div class="row">
                <div class="col-md-5 bg-light">
                    <div class="row no-gutter">
                        <div class="col-md-6">
                            <p>Customer name:</p>    
                            <p>Shipping address:</p>
                            <p>Phone:</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{$order->customer_name}}</p>
                            <p>{{$order->shipping_address}}</p>
                            <p>{{$order->phone}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2 bg-light">
                    <p>Payment method:</p>
                    <p>{{$order->payment_method}}</p>
                </div>
            </div>
            <div class="py-4"></div>                                           
            <div class="row" >
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
            
            <div class="row">
                <div class="col-md-4 d-flex justify-content-start">
                    <a href="{{url('/order-list')}}" class="btn btn-primary py-3 px-5">Back to your order list</a>

                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <a onclick="return confirm('Are you sure?')" href="{{url('/order-again-'.$order->id)}}" class="btn btn-primary py-3 px-5">Order again</a>

                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <a onclick="return confirm('Are you sure?')" href="{{url('/order-cancel-'.$order->id)}}" class="btn btn-primary py-3 px-5">Cancel order</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

