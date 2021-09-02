@include('frontend.layouts.header')
<section>
	<div class="bredcrun-main">
	<img src="{{url('/images')}}/product/pagebanner/{{$productdetails ? $productdetails->product_page_banner : ''}}" alt=""/>
			<div class="bread-content">
			<h2 class="text-white">Shop Now</h2>
			<p class="text-white"><a href="{{url('/')}}" class="text-white">Home</a> | Shop Now</p>
			</div>
</div>
</section>
<section class="product-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="image">
					<img src="{{url('/images')}}/product/{{$productname ? $productname->product_image : ''}}">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
						 @if(session()->has('message'))
 <div class="alert alert-default" id="final_msg" role="alert">
 {{ session()->get('message') }}
 </div>
 @endif 
					<p class="model">{{$productname ? $productname->product_name : ''}}</p>
					<h4>{{$productname ? $productname->product_number : ''}}</h4>
					<div class="product-prices" style="">
                        <div class="product-discount">
                             <span class="regular-price">{{$productdetails ? $productdetails->discount_rate : ''}}</span>
						</div>
						 <div class="product-price h5 has-discount">
							<div class="current-price">
									<span>{{$productname ? $productname->product_rate : ''}}</span>
									<span class="discount discount-percentage">{{$productdetails ? $productdetails->save_percentage : ''}}</span>
							 </div>
						 </div>
						<div class="tax-shipping-delivery-label">Tax included</div>
					</div>
					<p class="detail">{{$productdetails ? $productdetails->short_details : ''}}</p>
					<div class="cart-area">
						<a data-toggle="modal" data-target="#modalContactForm" class="cart-btn transition">Enquiry Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="product-detail description-tab">
	<div class="container">
		<div class="row">
			<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Description</li>
			<li class="tab-link" data-tab="tab-2">Product Details</li>
			<li class="tab-link" data-tab="tab-3">Reviews</li>
		</ul>
			<div id="tab-1" class="tab-content current">
			{{$productdetails ? $productdetails->description : ''}}
			</div>
			<div id="tab-2" class="tab-content">
			{{$productdetails ? $productdetails->product_details : ''}}
			</div>
			<div id="tab-3" class="tab-content">
			{{$productdetails ? $productdetails->reviews : ''}}
			</div>
      </div>
	</div>
</section>
<section class="product-detail features" style="background-image: url('/images/product/tagbanner/{{$productdetails ? $productdetails->banner_tags : ''}} ');">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="box">
					<p>{{$productdetails ? $productdetails->tag1 : ''}}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
				
					<p>{{$productdetails ? $productdetails->tag2 : ''}}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
				<p>{{$productdetails ? $productdetails->tag3 : ''}}</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="product-detail number">
   <div class="container">
	   <div class="row">
		  <div class="col-md-3">
			<div class="product-heading">Width</div>
		  </div>
		   <div class="col-md-3">
			  <div class="product-heading">Aspect Ratio</div>
		   </div>
		    <div class="col-md-3">
				<div class="product-heading">Rim Diameter</div>
			</div>
			<div class="col-md-3">
				<div class="product-heading">Tube Type</div>
			</div>
	   </div>
	   <div class="row bg">
		 <div class="col-md-3">
			<div class="content">{{$productdetails ? $productdetails->width : ''}}</div>
		 </div>
		 <div class="col-md-3">
			<div class="content">{{$productdetails ? $productdetails->aspect_ratio : ''}}</div>
		 </div>
		 <div class="col-md-3">
			<div class="content">{{$productdetails ? $productdetails->rim_diameter : ''}}</div>
		 </div>
		 <div class="col-md-3">
			<div class="content">{{$productdetails ? $productdetails->tube_type : ''}}</div>
		 </div>
	   </div>
   </div>
</section>


 	<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
						  aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header text-center">
								<h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							<form action="{{ url('/submit-enquriy-form') }}" method="post">
						     @csrf
							  <div class="modal-body mx-3">
								<div class="md-form">
								  <i class="fa fa-user prefix grey-text"></i><label data-error="wrong" data-success="right" for="form34">Your name</label>
								  <input type="text" class="form-control validate" name="customer_name" id="customer_name">
								  
								</div>

								<div class="md-form">
								  <i class="fa fa-envelope prefix grey-text"></i><label data-error="wrong" data-success="right" for="form29">Your email</label>
								  <input type="email" id="customer_email" name="customer_email" class="form-control validate">
								  
								</div>

								<div class="md-form">
								  <i class="fa fa-tag prefix grey-text"></i><label data-error="wrong" data-success="right" for="form32">Subject</label>
								  <input type="text" id="subject" name="subject" class="form-control validate">
								  
								</div>

								<div class="md-form">
								  <i class="fa fa-pencil prefix grey-text"></i><label data-error="wrong" data-success="right" for="form8">Your message</label>
								<textarea type="text" id="message" name="message" class="md-textarea form-control" rows="4"></textarea>
								  </div>

							  </div>
							  <div class="modal-footer d-flex justify-content-center">
								<button class="btn btn-unique" type="submit">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
							  </div>
							  </form>
							</div>
						  </div>
						</div>
@include('frontend.layouts.footer')

<script>
     setTimeout(function(){$('#final_msg').fadeOut();}, 5000);
</script>