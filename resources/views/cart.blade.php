@extends('layout')
@section('title',"Gio hang")
@section('location',"CART")
@section('content')
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
            <div class="cart-list">
                @if($cart==null)
                    <h3>Cart is empty</h3>
                @else
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($cart as $p)
                            <tr class="text-center">

                                <td class="product-remove"><a href="{{url('/remove-cart/'.$p->id)}}" onclick="return confirm('Are you sure?')"><span class="ion-ios-close"></span></a></td>
                                
                                <td class="image-prod"><div class="img" style="background-image:url({{$p->thumbnail}});"></div></td>
                                
                                <td class="product-name">
                                    <h3>{{$p->product_name}}</h3>
                                </td>
                                
                                <td class="price">{{$p->price}}$</td>
                                
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="{{$p->cart_qty}}" min="1" max="100">
                                    </div>
                                </td>
                                
                                <td class="total">{{$p->cart_qty*$p->price}}$</td>
                            </tr><!-- END TR-->
                        @endforeach                        
                        
                    </tbody>
                    </table>
                    @endif
                </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
            <p class="text-center"><a href="{{url('/check-out')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
        </div>
        <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
            <p class="text-center"><a onclick="return confirm('Are you sure?')" href="{{url('/clear-cart')}}" class="btn btn-primary py-3 px-4">Clear cart</a></p>
        </div>
    </div>
    </div>
</section>
@endsection
