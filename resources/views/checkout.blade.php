@extends('layout')
@section('title',"Thanh toan")
@section('location',"CHECKOUT")
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 ftco-animate fadeInUp ftco-animated">
                <form action="{{url('/check-out')}}" method="POST" class="billing-form" id="bill">
                    @csrf
                    <h3 class="mb-4 billing-heading">Billing Details</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group" >
                                <label for="firstname">Name</label>
                                <input type="text" class="form-control" placeholder="" name="name" required>
                            </div>
                        </div>   
                
                        <div class="w-100"></div>
                    <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label for="country">State / Country</label>
                            <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">France</option>
                                    <option value="">Italy</option>
                                    <option value="">VietNam</option>
                                    <option value="">South Korea</option>
                                    <option value="">Hongkong</option>
                                    <option value="">Japan</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="streetaddress">Street Address</label>
                                <input type="text" class="form-control" placeholder="House number and street name" name="address" required>
                            </div>
                        </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
                        </div>
                    </div> -->
                    <!-- <div class="w-100"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="towncity">Town / City</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postcodezip">Postcode / ZIP *</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    </div> -->
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" placeholder="" name="phone" required>
                            </div>
                        </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="emailaddress">Email Address</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div> -->
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <label class="mr-3"><input type="radio" name="optradio"> Save this address? </label>
                                    <label><input type="radio" name="optradio"> Ship to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                

                    <div class="row mt-5 pt-3 d-flex">
                    <div class="col-md-6 d-flex">
                        <div class="cart-detail cart-total bg-light p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            <p class="d-flex">
                                <span>Subtotal</span>
                                <span>${{session()->get("total")}}</span>
                            </p>
                            <p class="d-flex">
                                <span>Delivery</span>
                                <span>$0.00</span>
                            </p>
                            <p class="d-flex">
                                <span>Discount</span>
                                <span>$0.00</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span>${{session()->get("total")}}</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="cart-detail bg-light p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Payment Method</h3>
                                <div class="form-group" form="bill">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment_method" class="mr-2" value="bank_transfer"> Direct Bank Tranfer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" form="bill">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment_method" class="mr-2" value="cod"> Check Payment</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" form="bill">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment_method" class="mr-2" value="paypal"> Paypal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" form="bill">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="" class="mr-2" required> I have read and accept the terms and conditions</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <p><a onclick="document.getElementById('bill').submit()" class="btn btn-primary py-3 px-4">Place an order</a></p>
                            </div>
                        </div>
                    </div>
                </form><!-- END -->
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section>
@endsection
