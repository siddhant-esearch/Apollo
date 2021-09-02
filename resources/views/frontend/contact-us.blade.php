@include('frontend.layouts.header')

<!-- about us -->
<section>
	<div class="bredcrun-main">
	<img src="{{url('/images')}}/contact/{{$datacontact ? $datacontact->contact_banner : ''}}" alt=""/>
			<div class="bread-content">
			<h2 class="text-white"> Contact Us </h2>
			<p class="text-white"><a href="#" class="text-white">Home</a> | Contact Us </p>
			</div>
</div>
</section>
<section class="contact-info-area padd-5">
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="contact-info">
					<div class="icon-box"><i class="fa fa-map-marker"></i></div>
					<h5>{{$datacontact ? $datacontact->address : ''}}</h5>
					<!-- <span>Melbourne Australia</span> -->
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="contact-info">
					<div class="icon-box"><i class="fa fa-mobile"></i></div>
					<h5>{{$datacontact ? $datacontact->mobile : ''}}</h5>
					<span>{{$datacontact ? $datacontact->after_mobile : ''}}</span>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="contact-info">
					<div class="icon-box"><i class="fa fa-envelope-o"></i></div>
					<h5>{{$datacontact ? $datacontact->email : ''}}</h5>
					<span>{{$datacontact ? $datacontact->after_email : ''}}</span>
				</div>
			</div>
			
		</div>
	</div>    
</section>
<section class="appointment pt-2 mb-4">
	<div class="container"> 
	 @if(session()->has('message'))
 <div class="alert alert-default" id="final_msg" role="alert">
 {{ session()->get('message') }}
 </div>
 @endif 
		<div class="sec-title text-center mb-5">
			<h2>Get In <span>Touch</span></h2>
			<p>{{$datacontact ? $datacontact->contact_dis : ''}}</p>
		</div>
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
                    <img src="{{url('/images')}}/contact/{{$datacontact ? $datacontact->contact_pic : ''}}" class="w-75 m-auto" alt="">
                </div>
            </div>
        </div>
	</div>
</section>
<section>
<div class="container-fluid">
<iframe src="" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</section>

@include('frontend.layouts.footer')

<script>
     setTimeout(function(){$('#final_msg').fadeOut();}, 5000);
</script>