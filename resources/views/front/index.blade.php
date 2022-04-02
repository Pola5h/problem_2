


@extends('front.front_master')
@section('front')


@php


    $productvariants=  DB::table('product_variants')
->select('product_variants.id','product_variants.product_id','product_variants.gender','product_variants.color','product_variants.size','product_variants.price','products.product_name')
->join('products','products.id','=','product_variants.product_id')
->get();

	$totalproductvariants= DB::table('product_variants')->count();




@endphp




<section class="products section">
	<div class="container">
		<div class="row">
			


            @if($totalproductvariants>=1)
            @foreach ($productvariants as $productvariant)


           
            
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Available</span>
						<img class="img-responsive" src="{{asset('frontend/images/shop/products/product-1.jpg')}}" alt="product-img" />
						<div class="preview-meta">
							<ul>
							
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-search-strong"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="{{route('product.details',$productvariant->id)}}"> {{$productvariant->product_name}} @if ($productvariant->gender!='N/A') For {{$productvariant->gender}} @else @endif    </a></h4>
                        <h6><a>Color: {{$productvariant->color}}</a></h6>
                        <h6><a>Size: {{$productvariant->size}}</a></h6>

						<p class="price">{{$productvariant->price}} TK</p>
					</div>
				</div>
			</div>
            @endforeach

	
            @else
            <br>
            <label > There are no product vailable right. Please visit later. Thank you.</label>
            
            @endif
	

		
		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
			        				<p class="product-price">$200</p>
			        				<p class="product-short-description">
			        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
			        				</p>
			        				<a href="cart.html" class="btn btn-main">Add To Cart</a>
			        				<a href="product-single.html" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->

		</div>
	</div>
</section>

@endsection
