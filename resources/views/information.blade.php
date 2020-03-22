@php use Illuminate\Support\Facades\Auth; @endphp
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
                    <a class="nav-link active" href="#" aria-selected="true">Profile information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/order-list')}}" >Order list</a>
                </li>                                 
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" >                 
                    
                    <form action="#" method="POST">
                        <h3 class="mb-4 billing-heading">Update information</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group" >
                                    <label for="firstname">Name</label>
                                    <input disabled type="text" class="form-control" name="name" value="{{Auth::user()->name}}" />
                                </div>
                            </div>   
                    
                            <div class="w-100"></div>
                    
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input disabled type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                                </div>
                            </div>
                        
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                            </div>
                    
                            <div class="w-100"></div>
                            <!-- <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="0" class="mr-2" onclick="changeVal()"> Change password?</label>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-md-12">
                                <div class="form-group" >
                                    <label for="firstname">Current password</label>
                                    <input type="text" class="form-control" name="c-pass" />
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group" >
                                    <label for="firstname">New password</label>
                                    <input type="text" class="form-control" name="n-pass" required/>
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group" >
                                    <label for="firstname">Confirm new password</label>
                                    <input disabled type="text" class="form-control" name="cn-pass" required />
                                </div>
                            </div> -->
                            
                            <div class="col-md-12">
                                <div class="form-group mt-4">                                
                                    <div class="radio">
                                        <label class="input-label pr-4">Your gender</label>
                                        <label class="mr-3"><input type="radio" name="optradio" required>Male</label>
                                        <label><input type="radio" name="optradio" required>Female</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary py-3 px-4">Update information</button>
                    </form>
                </div>                
            </div>
            
        </div>
    </div>
</div>

@endsection

