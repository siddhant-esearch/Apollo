<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Apollotyres.com</title>
<link href="{{url('/webassets')}}/css/style.css" rel="stylesheet" type="text/css">
<link href="{{url('/webassets')}}/css/cust.css" rel="stylesheet" type="text/css">
<link href="{{url('/webassets')}}/css/media.css" rel="stylesheet" type="text/css">
<link href="{{url('/webassets')}}/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">


 @php
 $datacontact = DB::table('contact_us')->where('id',1)->first();
 @endphp
   <link rel="shortcut icon" href="{{url('/images')}}/logo/{{$datacontact ? $datacontact->favicon : ''}}" type="image/x-icon">
    <link rel="icon" href="{{url('/images')}}/logo/{{$datacontact ? $datacontact->favicon : ''}}" type="image/x-icon">
</head>
<body>
<!--header-->
<header>
  <!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="row">
			    <div class="col-12 col-sm-12 col-md-2 col-lg-3"></div>
				<div class="col-12 col-sm-12 col-md-8 col-lg-6 bbr without-ft">
				<ul class="img-w-h hidden-xs hidden-sm">
                                    <li>
                                        <a href="car.html" class="history__menu tooltip">
                                            <img class="nav__icon img-responsive center-block" src="{{url('/webassets')}}/images/top-bar/vehicle-icon-car-grey-2x.png" alt="" >
											<span class="tooltiptext">Cars, Suvs &amp; Vans</span>
										</a>
                                    </li>
                                    <li>
                                        <a href="truck.html" class="history__menu tooltip">
                                            <img class="nav__icon img-responsive center-block" src="{{url('/webassets')}}/images/top-bar/vehicle-icon-cv-grey-2x.png" alt="Trucks and Buses">
                                        <span class="tooltiptext">Trucks and Buses</span>
										</a>
                                    </li>
                                    <li>
                                        <a href="agriculture.html" class="history__menu tooltip">
                                            <img class="nav__icon img-responsive center-block" src="{{url('/webassets')}}/images/top-bar/vehicle-icon-agri-grey-2x.png" alt="Agricultural" >
                                        <span class="tooltiptext">Agricultural</span>
										</a>
                                    </li>
                                     <li>
                                        <a href="industrial.html" class="history__menu tooltip">
                                            <img class="nav__icon img-responsive center-block" src="{{url('/webassets')}}/images/top-bar/newindustrial_icon.png" alt="Industrial" >
                                        <span class="tooltiptext">Industrial</span>
										</a>
                                    </li>
                                    <li>
                                        <a href="earthmover.html" class="history__menu tooltip">
                                            <img class="nav__icon img-responsive center-block" src="{{url('/webassets')}}/images/top-bar/vehicle-icon-emv-grey-2x.png" alt="Earthmover">
                                            <span class="tooltiptext"> Earthmover </span>
										</a>
                                    </li>
                </ul>
			</div>
				<div class="col-12 col-sm-12 col-md-2 col-lg-3">
				   <div class="float-right">
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!--top-header end-->
	 <!--logo-header-->
	<div class="logo-header">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<img src="{{url('/images')}}/logo/{{$datacontact ? $datacontact->logo1 : ''}}">
					</div>
				</div>
				<div class="col-sm-6 col-md-7">
					<div class="search-box">
						<input type="text" placeholder="Search.." name="search" class="form-control">
						<div class="search-btn">Search</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-2">
					<div class="logo right float-right">
						<img src="{{url('/images')}}/logo/{{$datacontact ? $datacontact->logo2 : ''}}">
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!--logo-header end-->
	 <!--menu-header-->
	 <div class="menu-header">
		<div class="container">
		   <div class="row desktop-menu">
				<nav>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/about')}}">About Us</a></li>
						<li><a href="{{url('/services')}}">Services</a></li>
						<li><a href="{{url('/product')}}">Products</a></li>
						<li><a href="{{url('know-your-tyre')}}">Know Your Tires</a></li>
						<li><a href="{{url('/gallery')}}">Gallery</a></li>
						<li><a href="{{url('/contact-us')}}">Contact Us</a></li>
					</ul>
				</nav>
				<!-- enquiry form on click -->
				<div class="customer-support">
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

						<div class="text-center">
						  <a href="" class="btn enquiry btn-default transition" data-toggle="modal" data-target="#modalContactForm">Enquiry Now</a>
						</div>
				</div> <!-- // enquiry form -->
			</div>
		</div>
		<!-- ================ Find tyres and search tyres =============== -->
<!-- ================= End find store ====================== -->
		<div class="mobile-menubtn">
			<div class="btnmmenu" id="toggle-sidebar">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div id="sidebar" class="sidebar-offcanvas-menu">
			<div id="sidebar-wrapper" class="sidebar-wrapper"> 		
				<div class="outer">
					<div class="sidebar-top-header">				  
						<div class="sidebar-close-btn">
							<a class="close-sidebar">✕</a>
						</div> 
                        <div class="customer-support">
						<div class="modal fade" id="modalContactFormmobile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
								<button class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
							  </div>
							</form>
							</div>
						  </div>
						</div>

						<div class="text-center">
						  <a href="" class="btn enquiry btn-default transition" data-toggle="modal" data-target="#modalContactFormmobile">Enquiry Now</a>
						</div>
				   </div>					
					</div>  
					<div class="inner">                    		            
						<ul class="sidebar-menu">
							<li class="menu-item"><a href="{{url('/')}}">Home</a></li>
							<li class="menu-item"><a href="{{url('/about')}}">About Us</a></li>
							<li class="menu-item"><a href="{{url('/services')}}">Services</a></li>
							<li class="menu-item"><a href="shop.html">Products</a></li>
							<li class="menu-item"><a href="know-your-tyre.html">Know Your Tires</a></li>
							<li class="menu-item"><a href="{{url('/gallery')}}">Gallery</a></li>
							<li class="menu-item"><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!-- // mobile menu -->
	 </div>
	 <!--menu-header end-->

</header>
<!--header end-->

@if(session()->has('message'))
<?php  echo '<script type="text/javascript">'
    . '$( document ).ready(function() {'
    . '$("#myModal").modal("show");'
    . '});'
    . '</script>';?>
@endif 



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>