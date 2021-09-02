@include('frontend.layouts.header')
<!-- Start Services -->
<section>
	<div class="bredcrun-main">
	<img src="{{url('/images')}}/banner/{{$aboutbanner ? $aboutbanner->service_banner  : ''}}" alt=""/>
			<div class="bread-content">
			<h2 class="text-white"> Services </h2>
			<p class="text-white"><a href="{{url('/')}}" class="text-white">Home</a> | Services </p>
			</div>
</div>
</section>
<section class="we-have">
	<div class="container">
		<div class="hd-heading">
			<h3>Services we offer</h3>
		</div>
		<p class="text-center">{{$aboutbanner ? $aboutbanner->service_dis  : ''}}</p>
	    <div class="row cutting-image">
	    	
			 @foreach($dataservice as $dservice)
            <div class="col-md-6">
                <div class="image-box">
                    <div class="image">
                        <img src="{{url('/images')}}/service/{{$dservice ? $dservice->service_image : ''}}">
                    </div>
                    <div class="content">
                        <h5>{{$dservice ? $dservice->service_name : ''}}</h5>
                        <p>{{$dservice ? $dservice->service_discription : ''}}</p>
						@if($dservice->details_status == 1)
                        <a href="{{url('/service-details')}}/{{$dservice ? $dservice->detail_id : ''}}" class="transition">Read More</a>
                        @else
						@endif
					</div>
                </div>
            </div>
            @endforeach
		
		</div>
	</div>
</section>
<section class="cap bg-s about"  style="background-image: url('/images/about/{{$aboutdata ? $aboutdata->contact_pic : ''}} ');">
<div class="overlay-b">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="box text-center">
				<div class="hd-heading">
			<h3 class="text-center red-bg-text-white"> {{$aboutdata ? $aboutdata->contact_dis1 : ''}}</h3>
				</div>
					<p class="red-bg-text-white">{{$aboutdata ? $aboutdata->contact_dis2 : ''}}</p>
					<p><a href="{{url('/contact-us')}}" class="btn bbt"> Contact Us</a></p>
				</div>
			</div>

		</div>
	</div>
	</div>
</section>
<section class="frequent">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="image">
					<img src="{{url('/images')}}/faq/{{$faqimage ? $faqimage->c_pic1 : ''}}">
				</div>
				<div class="row pt-3">
					<div class="col-md-6 col-sm-6 col-6">
						<div class="image">
							<img src="{{url('/images')}}/faq/{{$faqimage ? $faqimage->c_pic2 : ''}}">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-6">
						<div class="image">
							<img src="{{url('/images')}}/faq/{{$faqimage ? $faqimage->c_pic3 : ''}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h4>Customer's Questions</h4>
				<div class="bs-example">
					<div class="accordion" id="accordionExample">


					  @foreach($customerquestions as $dataq)
                     <div class="card">
                        <div class="card-header" id="headingOne">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><p>{{$dataq ? $dataq->question : ''}}</p><div><i class="fa fa-plus"></i> </div></button>                                   
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{$dataq ? $dataq->answer : ''}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="appointment services-section-q mt-5">
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
                    <img src="{{url('/images')}}/banner/{{$aboutbanner ? $aboutbanner->service_from_pic  : ''}}" class="w-100" alt="">
                </div>
            </div>
        </div>
	</div>
</section>
@include('frontend.layouts.footer')