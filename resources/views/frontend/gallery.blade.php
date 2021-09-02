@include('frontend.layouts.header')
<!-- Start gallery main -->
<section>
	<div class="bredcrun-main">
	<img src="{{url('/images')}}/banner/{{$gallerbanner ? $gallerbanner->gallery_banner : ''}}" alt=""/>
			<div class="bread-content">
			<h2 class="text-white"> Gallery </h2>
			<p class="text-white"><a href="{{url('/')}}" class="text-white">Home</a> | Gallery </p>
			</div>
</div>
</section>
<section class="gallery">
	<div class="container">
		<div class="hd-heading">
			<h3>Apollo Tyres Gallery</h3>
		</div>
		 <div class="tz-gallery">
			   <div class="row">
				 @foreach($galleryimg as $gdata)
          <div class="col-md-4 col-sm-6">
            <a class="lightbox" href="{{url('/images')}}/gallery/{{$gdata ? $gdata->image : ''}}">
             <img src="{{url('/images')}}/gallery/{{$gdata ? $gdata->image : ''}}">
         </a>
     </div>
     @endforeach
			
			 </div>
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
<section class="features-two padd-4 padd-5">
	<div class="container">
	<div class="form-heading">
						<h2><span></span> Just check our services </h2>
					</div>
		<div class="row">
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="content">
					<h4> Warranty </h4>
					<div class="text">
						<p>{{$gallerycontent ? $gallerycontent->warranty : ''}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="content">
					<h4>24X7 Response Service</h4>
					<div class="text">
						<p>{{$gallerycontent ? $gallerycontent->responsive_service : ''}}</p>
					</div>
					</div>
			</div>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="content">
					<h4>Road Hazard Protection </h4>
					<div class="text">
						<p>{{$gallerycontent ? $gallerycontent->road_protection : ''}}</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

@include('frontend.layouts.footer')