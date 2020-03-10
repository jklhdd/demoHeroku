@extends('layout')
@section('title',"SHOP")
@section('location',"SHOP")
@section('content')
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-10 order-md-last">
				<div class="row">
					@foreach($product as $p)
						<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex fadeInUp ftco-animated">
							<div class="product d-flex flex-column">
								<a href="{{url('/product-single-'.$p->id)}}" class="img-prod"><img class="img-fluid" src={{asset($p->thumbnail)}} alt="Colorlib Template">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3">
									<div class="d-flex">
										<div class="cat">
											<span>{{$p->category_name}}</span>
										</div>
										<div class="rating">
											<p class="text-right mb-0">
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											</p>
										</div>
									</div>
									<h3><a href="{{url('/product-single-'.$p->id)}}">{{ $p->product_name }}</a></h3>
									<div class="pricing">
										<p class="price"><span>{{$p->price}}</span></p>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
										<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
									</p>
								</div>
							</div>
						</div>
					@endforeach

					@forelse($product as $p)
						@empty
							<p>Items not found</p>

					@endforelse

				</div>
				<div class="row mt-5">
					<div class="col text-center">
						<div class="block-27">
							<ul>
								<li><a href="#">&lt;</a></li>
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&gt;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-2">
				<div class="sidebar">
					<div class="sidebar-box-2">
						<h2 class="heading">Categories</h2>
						<div class="fancy-collapse-panel">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								@foreach($brand as $b)
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$b->id}}" aria-expanded="true" aria-controls="collapseOne">{{$b->brand_name}}
												</a>
											</h4>
										</div>
										<div id="collapse{{$b->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<ul>
													@foreach($category as $c)
														<li><a href="{{url('/shop/'.$b->id.'/'.$c->id)}}">{{$c->category_name}}</a></li>											
													@endforeach
												</ul>
											</div>
										</div>
									</div>
								@endforeach								
							</div>
						</div>
					</div>
					<div class="sidebar-box-2">
						<h2 class="heading">Price Range</h2>
						<form method="post" class="colorlib-form-2">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="guests">Price from:</label>
										<div class="form-field">
											<i class="icon icon-arrow-down3"></i>
											<select name="people" id="people" class="form-control">
												<option value="#">1</option>
												<option value="#">200</option>
												<option value="#">300</option>
												<option value="#">400</option>
												<option value="#">1000</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="guests">Price to:</label>
										<div class="form-field">
											<i class="icon icon-arrow-down3"></i>
											<select name="people" id="people" class="form-control">
												<option value="#">2000</option>
												<option value="#">4000</option>
												<option value="#">6000</option>
												<option value="#">8000</option>
												<option value="#">10000</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('instagram')
<section class="ftco-gallery">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
				<h2 class="mb-4">Follow Us On Instagram</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
			</div>
		</div>
	</div>
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection
