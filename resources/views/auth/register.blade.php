@extends('layouts.layout')

@section('title')
Register
@endsection
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5 d-none d-lg-block bg-login-image" ></div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
          </div>
          <form class="user" method="POST" action="{{ route('register') }}">
            @csrf  
            <div class="form-group">
                <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" 
                id="name" placeholder="User Name" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" 
                id="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" 
                    id="password" placeholder="Password" name="password" required >
                    
                </div>

                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" 
                    id="confirmpass" placeholder="Confirm Password" name="password_confirmation" required>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Register Account
            </button>

            <hr>
            <a href="index.html" class="btn btn-google btn-user btn-block">
              <i class="fa fa-google-plus"></i> Register with Google
            </a>
            <a href="index.html" class="btn btn-facebook btn-user btn-block">
              <i class="fa fa-facebook"></i> Register with Facebook
            </a>
          </form>
          <hr>
          <div class="text-center">
            <a class="small" href="{{url('password/reset')}}">Forgot Password?</a>
          </div>
          <div class="text-center">
            <a class="small" href="{{url('login')}}">Already have an account? Login!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
