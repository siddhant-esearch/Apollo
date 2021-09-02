<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center pb-2">
				 @php
 $datacontact = DB::table('contact_us')->where('id',1)->first();
 @endphp
				<h5>Contact Info</h5>
				<p><span>Address:</span> {{$datacontact ? $datacontact->address : ''}}</p>
				<p><span>Phone:</span> {{$datacontact ? $datacontact->mobile : ''}}</p>
				<p><span>E-mail:</span> {{$datacontact ? $datacontact->email : ''}}</p>
			</div>
					</div>
		<div class="row copyrights">
		     <div class="col-md-3">
				<ul class="footer-social">
					<li><a href="{{$datacontact ? $datacontact->facebook_url : ''}}"><i class="fa fa-facebook-f transition"></i></a></li>
					<li><a href="{{$datacontact ? $datacontact->twitter_url : ''}}"><i class="fa fa-twitter transition"></i></a></li>
					<li><a href="{{$datacontact ? $datacontact->youtube_url : ''}}"><i class="fa fa-youtube transition"></i></a></li>
					<li><a href="{{$datacontact ? $datacontact->instagram_url : ''}}"><i class="fa fa-instagram transition"></i></a></li>
					<li><a href="{{$datacontact ? $datacontact->linkedin_url : ''}}"><i class="fa fa-linkedin transition"></i></a></li>
				</ul>
			</div>
			<div class="col-md-6 text-center copyright">
				<p>2021 Apollo Tyres All Right Reserved Designed By: esearch Logix Technologies.</p>
			</div>
			<div class="col-md-3">
				<div class="image">
					<img src="images/footer-payment.png">
				</div>
			</div>
		</div>
		<button id="back-to-top"><i class="fa fa-angle-up"></i></button>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/webassets')}}/js/owl.carousel.js"></script>
<script type="text/javascript" src="{{url('/webassets')}}/js/jquery-2.2.0.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script src="{{url('/webassets')}}/js/custom.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
  <script>
// Add active class to the current button (highlight it)
$("#activate h5").click(function() {
  $("#activate h5").removeClass('Active');
    $(this).addClass('Active');
});
</script>
</body>
</html>