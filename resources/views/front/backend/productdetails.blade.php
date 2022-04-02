@extends('front.front_master')
@section('front')


@php

$x= (int)$data->product_id;
$p = DB::table('products')->where('id',$x)->get();




@endphp





<section class="single-product">
	<div class="container">
		
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src='{{asset('frontend/images/shop/single-products/product-1.jpg')}}' alt='' data-zoom-image="{{asset('frontend/images/shop/single-products/product-1.jpg')}}" />
								</div>
								<div class='item'>
									<img src='{{asset('frontend/images/shop/single-products/product-2.jpg')}}' alt='' data-zoom-image="{{asset('frontend/images/shop/single-products/product-2.jpg')}}" />
								</div>
								
					
								
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src='{{asset('frontend/images/shop/single-products/product-1.jpg')}}' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src='{{asset('frontend/images/shop/single-products/product-2.jpg')}}' alt='' />
							</li>
							
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
                    @foreach ($p as $x)


					<h2>{{$x->product_name}}@if ($data->gender!='N/A') For {{$data->gender}} @else @endif   </h2>

                    @endforeach
					<p class="product-price">{{$data->price}} TK</p>
					
					<p class="product-description mt-20">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsum dicta quod, quia doloremque aut deserunt commodi quis. Totam a consequatur beatae nostrum, earum consequuntur? Eveniet consequatur ipsum dicta recusandae.
					</p>
					<div class="product-category">

						<span>color:</span>
						<ul>
							<li>
								<a>{{$data->color}}</a>
							</li>
							
						</ul>
					</div>
					<div class="product-category">
						<span>Size:</span>
                        <ul>
							<li>
								<a>{{$data->size}}</a>
							</li>
							
						</ul>
					</div>
					<div class="product-quantity">
						<span>Quantity:</span>
						<div class="product-quantity-slider">
							<input id="product-quantity" type="text" value="0" name="product-quantity">
						</div>
					</div>
			
					<a href="cart.html" class="btn btn-main mt-20">Add To Cart</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>
						<li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Reviews </a></li>
					</ul>
					<div class="tab-content patternbg">
						<div id="details" class="tab-pane fade active in">
							<h4>Product Description</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut per spici</p>
						</div>
						<div id="reviews" class="tab-pane fade">
							<div class="post-comments">
						    	<ul class="media-list comments-list m-bot-50 clearlist">
								    <!-- Comment Item start-->
								 
								    <!-- End Comment Item -->

								    <!-- Comment Item start-->
								  
								    <!-- End Comment Item -->

								    <!-- Comment Item start-->
								
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<













@endsection