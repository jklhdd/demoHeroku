@extends('admin/layout')
@section('content')
<div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Edit Form</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="{{url('admin/tables/category/update',['id'=>$category->id])}}" method="POST">
                @csrf
                <div class="form-group @if($errors->has('category_name'))has-error @endif">
                    <input type="name" name="category_name" class="form-control " id="category_name" 
                    placeholder="Category Name" minlength="4" value="{{$category->category_name}}" required>
                    <div class="validate"></div>
                </div>                
                @if($errors->has("category_name"))
                    <p style="color:red">{{$errors->first("category_name")}}</p>
                @endif
                <div class="form-send">
                    <button type="submit" class="btn btn-large btn-primary">Update</button>
                </div>
            </form>
          </div>
@endsection
@section('script')
<script src="{{asset('admin/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!--custom switch-->
  <script src="{{asset('admin/lib/bootstrap-switch.js')}}"></script>
  <!--custom tagsinput-->
  <script src="{{asset('admin/lib/jquery.tagsinput.js')}}"></script>

  <!--Contactform Validation-->
  <script src="{{asset('admin/lib/form-validation-script.js')}}"></script>
@endsection