@include('frontend.layouts.header')

<!-- start know-your-tyre -->
<section>
<div class="bredcrun-main">
	<img src="images/about/2.jpg" alt=""/>
			<div class="bread-content">
			<h2 class="text-white"> Know Your Tyre </h2>
			<p class="text-white"><a href="{{url('/')}}" class="text-white">Home</a> | Know Your Tyre </p>
			</div>
</div>
</section>
<section class="we-have kyh">
	<div class="container">
		<div class="hd-heading">
			<h1> Tyre guides </h1>
		</div>
		<p class="text-center mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
		when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		<div id="guided">
  <div class="card">
    <div class="card-header nm" id="headings">
      <h5 class="mb-0">
        <button class="btn btn-link text-white" data-toggle="collapse" data-target="#popular" aria-expanded="true" aria-controls="popular">
         Popular
        </button>
		<button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#tyretuides" aria-expanded="false" aria-controls="tyretuides">
         Tyre Guides
        </button>
		 <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#vehiclecare" aria-expanded="false" aria-controls="vehiclecare">
         Vehicle Care
        </button>
      </h5>
    </div>

    <div id="popular" class="collapse show" aria-labelledby="headings" data-parent="#guided">
      <div class="card-body">
		<div class="row cutting-image">
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="image">
					<img src="images/know-your-tyre/a1.jpg">
					</div>
					<div class="content">
						<h3>Upsizing your Tyre? Tips and Tricks</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="image">
					<img src="images/know-your-tyre/a2.jpg">
					</div>
					<div class="content">
						<h3>Motor Vehicle Act 2019 –Traffic Rules</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="image">
						<img src="images/know-your-tyre/a3.jpg">
					</div>
					<div class="content">
						<h3>Difference Between Radial and Bias </h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="image">
					<img src="images/know-your-tyre/a4.jpg">
					</div>
					<div class="content">
						<h3>Buyer's Guide to the right pair</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div id="tyretuides" class="collapse" aria-labelledby="headings" data-parent="#guided">
      <div class="card-body">
		<div class="row cutting-image">
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="content after">
						<h3>Motorcycle/ Motorbike Tyres</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
					<div class="image">
					<img src="images/know-your-tyre/a3.jpg">
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="content after">
						<h3>Scooty Tyre in affordable price </h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
					<div class="image">
					<img src="images/know-your-tyre/a4.jpg">
					</div>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div id="vehiclecare" class="collapse" aria-labelledby="headings" data-parent="#guided">
      <div class="card-body">
		<div class="row cutting-image">
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="image">
					<img src="images/know-your-tyre/a1.jpg">
					</div>
					<div class="content">
						<h3>Upsizing your Tyre? Tips and Tricks</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="image">
					<img src="images/know-your-tyre/a2.jpg">
					</div>
					<div class="content">
						<h3>Motor Vehicle Act 2019 –Traffic Rules</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="image">
						<img src="images/know-your-tyre/a3.jpg">
					</div>
					<div class="content">
						<h3>Difference Between Radial and Bias </h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4 mb-4">
				<div class="image-box">
					<div class="image">
					<img src="images/know-your-tyre/a4.jpg">
					</div>
					<div class="content">
						<h3>Buyer's Guide to the right pair</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<a href="#" class="transition">Read More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
      </div>
    </div>
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
<section class="customer-service">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="image">
					<img src="images/quality-service.png">
				</div>
			</div>
			<div class="col-md-6">
				<div class="quality">
					<h3><span>Quality Service</span> and Customer Satisfaction !!</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
		when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></p>
				</div>
			</div>
		</div>
	</div>
</section>

@include('frontend.layouts.footer')