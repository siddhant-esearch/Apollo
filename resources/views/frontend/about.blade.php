@include('frontend.layouts.header')
<!-- about us -->
<section>

	<div class="bredcrun-main">
		<img src="{{url('/images')}}/banner/{{$aboutbanner ? $aboutbanner->about_banner : ''}}" alt=""/>
		<div class="bread-content">
			<h2 class="text-white"> About Us </h2>
			<p class="text-white"><a href="{{url('/')}}" class="text-white">Home</a> | About Us </p>
		</div>
	</div>
</section>
<section class="about-section">
	<div class="container">

		<!--Two Column-->
		<div class="two-column">

			<div class="row">
				<!--Image Column-->
				<div class="col-lg-6 col-md-6 col-sm-12">

					<div class="inner-box">
						<figure class="image-box"><img src="{{url('/images')}}/about/{{$aboutdata ? $aboutdata->about_pic : ''}}" alt=""></figure>
						<div class="image-caption">About Us</div>
					</div>
				</div>

				<!--Content Column-->
				<div class="content-column column col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="default-title"><h3>{{$aboutdata ? $aboutdata->about_heading : ''}}</h3></div>

						<div class="text">{{$aboutdata ? $aboutdata->about_dis : ''}}</div>

						<!--List Style One-->
						<ul class="list-style-one">
							<li>{{$aboutdata ? $aboutdata->point1 : ''}}</li>
							<li>{{$aboutdata ? $aboutdata->point2 : ''}}</li>
							<li>{{$aboutdata ? $aboutdata->point3 : ''}}</li>
							@if(!empty($aboutdata->point4))
							<li>{{$aboutdata ? $aboutdata->point4 : ''}}</li>
							@else
							@endif
								@if(!empty($aboutdata->point5))
							<li>{{$aboutdata ? $aboutdata->point5 : ''}}</li>
							@else
							@endif
								@if(!empty($aboutdata->point6))
							<li>{{$aboutdata ? $aboutdata->point6 : ''}}</li>
							@else
							@endif
						</ul>

						<!-- <a href="#" class="theme-btn btn-style-two">SEE OUR SERVICES</a> -->
					</div>
				</div>

			</div>

		</div>


	</div>
</section>
<section class="bg-red mt-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="inner-container red-bg-text-white left-bt">
					<div class="hd-heading">
						<h3 class="text-left red-bg-text-white">{{$aboutdata ? $aboutdata->why_heading : ''}}</h3>
					</div>
					{!! $aboutdata ? $aboutdata->why_description : '' !!}
					
					
					<!-- <p class="mt-4"><a href="#" class="transition">Read More</a></p> -->
				</div>
			</div>
			<div class="col-md-6 col-sm-6 bg-about-left" style="background-image: url('/images/about/{{$aboutdata ? $aboutdata->whypicture : ''}} ');">

			</div>
		</div>
	</div>
</section>
<section class="drill">
	<div class="container">
		<div class="row">
		  @foreach($discountdata as $data)
                <div class="col-md-4 col-sm-6">
                    <div class="image">
                        <img src="{{url('/images')}}/discountimages/{{$data ? $data->image : ''}}">
                        <div class="content">
                            <h4>{{$data ? $data->discount_for : ''}}</h4>
                            <p>{{$data ? $data->discount : ''}}</p>
                        </div>
                        <a href="{{url('/product')}}" class="btn drill-btn">Shop Now</a>
                    </div>
                </div>
              @endforeach       
		</div>
	</div>
</section>

<section class="cap mt-5"  style="background-image: url('/images/about/{{$aboutdata ? $aboutdata->contact_pic : ''}} ');">
	<div class="overlay-b">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="box text-center">
						<div class="hd-heading">
							<h3 class="text-center red-bg-text-white"> {{$aboutdata ? $aboutdata->contact_dis1 : ''}} </h3>
						</div>
						<p class="red-bg-text-white">{{$aboutdata ? $aboutdata->contact_dis2 : ''}}</p>
						<p><a href="{{url('/contact-us')}}" class="btn bbt"> Contact Us</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<section class="appointment about">
	<div class="container">
	 @if(session()->has('message'))
 <div class="alert alert-default" id="final_msg" role="alert">
 {{ session()->get('message') }}
 </div>
 @endif 
		<div class="row">
			<div class="col col-md-7 col-sm-12 col-12">
				  <form action="{{ url('/submit-contact-query-form') }}" method="post">
		 @csrf
			
				<div class="form-group">
					<div class="form-heading">
						<h5><span></span> Fillup for better response Details</h5>
					</div>
					<div class="form-flex thir">
						<input type="text" placeholder="Full Name" class="form-control" id="name" name="name">
						<input type="text" placeholder="Email Address" class="form-control" id="email" name="email">
						<input type="text" placeholder="Phone Number" class="form-control" name="mobile" id="mobile">
					</div>
				</div>
				<div class="form-group">
				<textarea  class="form-control" placeholder="Message" id="message" name="message"></textarea>
				</div>
				<button type="submit" class="btn book-now transition">Submit Now</button>
				</form>
			</div>
			<div class="col-md-5">
				<div class="hx-contact-img">

					<img src="{{url('/images')}}/banner/{{$aboutbanner ? $aboutbanner->about_form_img : ''}}" class="w-100" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
@include('frontend.layouts.footer')

<script>
     setTimeout(function(){$('#final_msg').fadeOut();}, 5000);
</script>