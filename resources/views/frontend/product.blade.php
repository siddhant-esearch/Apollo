@include('frontend.layouts.header')

<section class="inner-banner">
	<img src="{{url('/images')}}/banner/{{$aboutbanner ? $aboutbanner->product_banner : ''}}">
</section>
<section class="shop-form-area" id="sf">
	<div class="container">
 @if(session()->has('message'))
 <div class="alert alert-default" id="final_msg" role="alert">
 {{ session()->get('message') }}
 </div>
 @endif 
         <div class="row one">
			<div class="form-group position">
				<input type="text" placeholder="Search by vehicle, tyre size">
				<button>Find Tyres</button>
			</div>
			<div class="or-text">--OR--</div>
			<div class="form-group position">
				<input type="text" placeholder="Find Dealer">
				<button>Find Dealer</button>
			</div>
		 </div>
		 <div class="row">
			<div class="browse">
				<a href="#" class="bro">Browse All Types</a>
				<p>You can search by your vehicle model, tyre size or tyre type. e.g. you can type "Honda City" or "175/65 R14" or "Amazer 4G LIFE"</p>
			</div>
			<div class="location">
				<a href="#" class="bro">Use my Location</a>
				<p>You can search dealer by name, city and state etc.</p>
			</div>
		 </div>
		 <form action="{{ url('/submit-product-query-form') }}" method="post">
		 @csrf
		 <div class="row looking">
			<p>Looking for Assistance? Submit your details and our expert will get in touch with you.</p>
				
			<div class="form-boxes">
			    <div class="form-group">
					<input type="text" id="name" name="name" placeholder="Name*">
				</div>
				<div class="form-group">
				 <input type="text" id="mobile" name="mobile" placeholder="Phone Number*">
				</div>
				<div class="form-group">
					<input type="text" id="email" name="email" placeholder="Email*">
			    </div>
				<div class="form-group">
					<input type="text" id="city" name="city" placeholder="City*">
			    </div>
				<div class="form-group">
					<button type="submit">Submit</button>
				</div>
			</div>		
		 </div>
		 </form>
	</div>
</section>
<section class="safe-journey shop">
	<div class="container">
	<div class="hd-heading">
			<h3>What's New</h3>
		</div>
		<div class="row">
		  <div class="left-image">
				<img src="{{url('/images')}}/indexpics/{{$indexdata ? $indexdata->pic1 : ''}}">
			</div>
			<div class="right-image">
				<img src="{{url('/images')}}/indexpics/{{$indexdata ? $indexdata->pic2 : ''}}" alt="t1"/>
				<div class="box">
					<h3>{{$indexdata ? $indexdata->heading_after_slide : ''}}</h3>
					<p>{{$indexdata ? $indexdata->description_after_slide : ''}}</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="featured-product">
	<div class="container">
		<div class="hd-heading">
			<h3>Featured Products</h3>
		</div>
		<div class="owl-carousel owl-theme">

			@if(!empty($feturesdata))
			@foreach($feturesdata as $fdata)
			<div class="item">
				<div class="image"><img src="{{url('/images')}}/product/{{$fdata ? $fdata->product_image : ''}}"></div>
				<div class="content">
					<p class="model"><a href="{{url('/product-details')}}/{{$fdata ? $fdata->details_id : ''}}">{{$fdata ? $fdata->product_number : ''}}</a></p>
					<h4>{{$fdata ? $fdata->product_name : ''}}</h4>
					<p>{{$fdata ? $fdata->product_dis : ''}}</p>
					<div class="price">{{$fdata ? $fdata->product_rate : ''}}</div>
					<div class="cart-area">
						<a href="{{url('/product-details')}}/{{$fdata ? $fdata->details_id : ''}}" class="cart-btn transition">Details</a>
					</div>
				</div>
			</div>
			@endforeach
			@else
			@endif
		
		</div>
	</div>
</section>
<section class="new-product">
	<div class="container">
		<div class="hd-heading">
			<h3>New Products</h3>
		</div>
		<div class="owl-carousel owl-theme">
			@if(!empty($newdata))
			@foreach($newdata as $ndata)
			<div class="item">
				<div class="image"><img src="{{url('/images')}}/product/{{$ndata ? $ndata->product_image : ''}}"></div>
				<div class="content">
					<p class="model"><a href="#">{{$ndata ? $ndata->product_number : ''}}</a></p>
					<h4>{{$ndata ? $ndata->product_name : ''}}</h4>
					<p>{{$ndata ? $ndata->product_dis : ''}}</p>
					<div class="price">{{$ndata ? $ndata->product_rate : ''}}</div>
					<div class="cart-area">
						<a href="product-detail.html" class="cart-btn transition">Details</a>
					</div>
				</div>
			</div>
			@endforeach
			@else
			@endif
		</div>
	</div>
</section>

@include('frontend.layouts.footer')

<script>
     setTimeout(function(){$('#final_msg').fadeOut();}, 5000);
</script>