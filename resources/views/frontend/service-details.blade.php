@include('frontend.layouts.header')

<section class="inner-banner">
	<img src="{{url('/images')}}/banner/{{$aboutbanner ? $aboutbanner->service_details_banner : ''}}">
	<div class="banner-form">

    <div class="content">
    {!!$aboutbanner ? $aboutbanner->service_banner_dis : ''!!}
		<!-- <a href="#" class="btn drill-btn call-now">Call Now</a> -->
	</div>
	</div>
</section>
<section class="service-detail one">
	<div class="container">
	    <div class="hd-heading">
			<h3 class="text-center"><span>{{$servicename ? $servicename->service_name : ''}}</span></h3>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="content">
					<p>{{$servicedetails ? $servicedetails->description1 : ''}}</p>
				</div>
			</div>
			<div class="col-md-5">
				<div class="image-area">
					<div class="image">
						<img src="{{url('/images')}}/service/img1/{{$servicedetails ? $servicedetails->image1 : ''}}">
					</div>
					<div class="image two">
						<img src="{{url('/images')}}/service/img2/{{$servicedetails ? $servicedetails->image2 : ''}}">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="content">
					<p>{{$servicedetails ? $servicedetails->description2 : ''}}</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service-detail two">
  <div class="container">
	<div class="row">
		<div class="video_wrapper video_wrapper_full js-videoWrapper">
           <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="{{url('/images')}}/service/video/{{$servicedetails ? $servicedetails->video : ''}}"></iframe>
	        <button class="videoPoster js-videoPoster"></button>

		</div>
	</div>
  </div>
</section>
<section class="service-detail thre">
	<div class="container">
		<div class="content">
			<h2>{{$servicedetails ? $servicedetails->heading_after_video : ''}}</h2>
			<p>{{$servicedetails ? $servicedetails->description_after_video : ''}}</p>
		</div>
	</div>
</section>
<section class="service-detail three">
	<div class="container">
		<div class="row">
			<div class="col-md-6 px-0">
				<div class="image">
						<img src="{{url('/images')}}/service/imgleft/{{$servicedetails ? $servicedetails->image2 : ''}}">
					</div>
			</div>
			<div class="col-md-6 px-0">
				<div class="content">
					<h4>{{$servicedetails ? $servicedetails->left_heading : ''}} </h4>
					<p>{{$servicedetails ? $servicedetails->left_description : ''}}</p>
				</div>
			</div>
		</div>
		<div class="row">
		    <div class="col-md-6 px-0">
				<div class="content left">
                <h4>{{$servicedetails ? $servicedetails->right_heading : ''}} </h4>
					<p>{{$servicedetails ? $servicedetails->right_description : ''}}</p>
</div>
			</div>
			<div class="col-md-6 px-0">
				<div class="image">
						<img src="{{url('/images')}}/service/imgright/{{$servicedetails ? $servicedetails->right_image : ''}}">
					</div>
			</div>
		</div>
	</div>
</section>
@include('frontend.layouts.footer')