@extends('admin/layout')
@section('content')
<div class="col-lg-6 col-md-6 col-sm-6">
    <h4 class="title">Edit Form</h4>
    <div id="message"></div>
    <form class="contact-form php-mail-form" role="form" action="{{url('admin/product/update',['id'=>$product->id])}}" method="POST">
        @csrf
        <div class="form-group @if($errors->has('product_name'))has-error @endif">
            <input type="text" name="product_name" class="form-control " id="product_name" 
            placeholder="Product Name" minlength="4" value="{{$product->product_name}}" required>
            <div class="validate"></div>
        </div>
        <div class="form-group @if($errors->has('product_desc'))has-error @endif">
            <input type="name" name="product_desc" class="form-control " id="product_desc" 
            placeholder="Product Description" minlength="4" value="{{$product->product_desc}}" required>
            <div class="validate"></div>
        </div>
        <div class="form-group @if($errors->has('thumbnail'))has-error @endif">
            <input type="text" name="thumbnail" class="form-control " id="thumbnail" 
            placeholder="Thumbnail" minlength="4" value="{{$product->thumbnail}}" required>
            <div class="validate"></div>
        </div>
        <select class="form-group form-control" name="category_id" required>
            @php
                $category = \App\Category::all();
            @endphp
            <option selected value="">Select Category</option>
            @foreach($category as $c)
                <option value="{{$c->id}}">{{$c->category_name}}</option>
            @endforeach
        </select>
        
        <select class="form-group form-control" name="brand_id" required>
            @php
                $brand = \App\Brand::all();
            @endphp
            <option selected value="">Select Brand</option>
            @foreach($brand as $b)
                <option value="{{$b->id}}">{{$b->brand_name}}</option>
            @endforeach
        </select>

        <div class="form-group @if($errors->has('price'))has-error @endif">
            <input type="number" name="price" class="form-control " id="price" 
            placeholder="Price" min="1" value="{{$product->price}}" step="0.1" required>
            <div class="validate"></div>
        </div>
        <div class="form-group @if($errors->has('quantity'))has-error @endif">
            <input type="number" name="quantity" class="form-control " id="quantity" 
            placeholder="quantity" min="1" value="{{$product->quantity}}" required>
            <div class="validate"></div>
        </div>
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