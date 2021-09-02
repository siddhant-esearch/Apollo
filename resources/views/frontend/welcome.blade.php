@include('frontend.layouts.header')

<!--slider sec-->
<section class="slider-area">
    <div id="slider" class="owl-carousel">
      
        <div class="item active">
            <img src="{{url('/images')}}/slider/{{$fslide ? $fslide->banner : ''}}"style="max-width: 100%;">
            <div class="container">
                <div class="slider-content float-right">
                    <p>{{$fslide ? $fslide->heading : ''}}</p>
                    <h2>{{$fslide ? $fslide->description : ''}}</h2>
                    <a class="btn slider-btn transition" href="{{url('/product')}}">Shop Now</a>
                </div>
            </div>
              <!--   <div class="slider-1img">
                    <img src="{{url('/webassets')}}/images/slider/slider1-circle-old.png">
                </div> -->
            </div>

            @foreach($allslide as $slide)
            <div class="item">
                <img src="{{url('/images')}}/slider/{{$slide ? $slide->banner : ''}}"style="max-width: 100%;">
                <div class="container">
                    <div class="slider-content black" >
                        <p>{{$slide ? $slide->heading : ''}}</p>
                        <h2>{{$slide ? $slide->description : ''}}</h2>
                        <a class="btn slider-btn transition" href="{{url('/product')}}">Shop Now</a>
                    </div>
                </div>
               <!--  <div class="slider-2img">
                    <img src="{{url('/webassets')}}/images/slider/slider2-circle-old.png">
                </div> -->
            </div>
            @endforeach
        </div>
    </section>
    <!--slider sec end-->
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
    <section class="safe-journey">
        <div class="container">
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
<section class="we-have">
    <div class="container">
        <div class="hd-heading">
            <h3>We Have</h3>
        </div>
        <p class="text-center">{{$indexdata ? $indexdata->we_have_description : ''}}</p>
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
                        <a href="{{url('/view-service-details')}}/{{$dservice ? $dservice->detail_id : ''}}" class="transition">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
         
        </div>
    </div>
</section>
<section class="customer-service">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{url('/images')}}/indexpics/{{$indexdata ? $indexdata->after_we_have_pic : ''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="quality">
                    <h3>{{$indexdata ? $indexdata->after_we_have_heading : ''}}</h3>
                    <p>{{$indexdata ? $indexdata->after_we_have_description : ''}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <div class="transparent-square transition">
                        <div class="icon">
                            <i class="fa fa-cog"></i>
                        </div>
                    </div>
                    <h4>Inspection</h4>
                    <p>{{$indexdata ? $indexdata->inspection_dis : ''}}</p>
                    <!-- <a href="#" class="btn read transition">Read More</a> -->
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                  <div class="transparent-square transition">
                    <div class="icon">
                        <i class="fa fa-edit"></i>
                    </div>
                </div>
                <h4>Diagnostic</h4>
                <p>{{$indexdata ? $indexdata->diagnostic_dis : ''}}</p>
             <!--    <a href="#" class="btn read transition">Read More</a> -->
            </div>
        </div>
        <div class="col-md-4 col-sm-6 m-auto d-block">
            <div class="box">
              <div class="transparent-square transition">
                <div class="icon">
                    <i class="fa fa-wrench"></i>
                </div>
            </div>
            <h4>Upgrades</h4>
            <p>{{$indexdata ? $indexdata->upgrades_dis : ''}}</p>
            <!-- <a href="#" class="btn read transition">Read More</a> -->
        </div>
    </div>
</div>
</div>
</section>

<section class="gallery">
    <div class="container">
        <div class="hd-heading">
            <h3>Our Gallery</h3>
        </div>
        <div class="tz-gallery">
         <div class="row">

          @foreach($gallerydata as $gdata)
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
<section class="frequent">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               
                <div class="image">
                    <img src="{{url('/images')}}/faq/{{$faqimage ? $faqimage->pic1 : ''}}">
                </div>
                <div class="row pt-3">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="image">
                            <img src="{{url('/images')}}/faq/{{$faqimage ? $faqimage->pic2 : ''}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="image">
                            <img src="{{url('/images')}}/faq/{{$faqimage ? $faqimage->pic3 : ''}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Frequently Asked Questions</h4>
                <div class="bs-example">
                    <div class="accordion" id="accordionExample">



                     @foreach($faqdata as $faq)
                     <div class="card">
                        <div class="card-header" id="headingOne">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><p>{{$faq ? $faq->heading : ''}}</p><div><i class="fa fa-plus"></i> </div></button>                                   
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>{{$faq ? $faq->description : ''}}</p>
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
<section class="appointment">
    <div class="container">
        <div class="hd-heading">
            <h3>Get An Appointments</h3>
        </div>
        <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="row form-sec">
            <div class="col-md-4">
                <div class="image">
                    <img src="{{url('/webassets')}}/images/appointment.jpg">
                </div>
            </div>
            <div class="col-md-8">
             <form>
                <div class="form-group">
                    <div class="form-heading">
                        <h5><span>1.</span> Vehicle Information</h5>
                    </div>
                    <div class="form-flex">
                        <select class="form-select form-control" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                      </select>
                      <select class="form-select form-control" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                      </select>
                      <input type="text" placeholder="Enter Vehicle Model" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <div class="form-heading">
                    <h5><span>2.</span> Appointment Information</h5>
                </div>
                <div class="form-flex sec">
                    <input type="text" placeholder="Appointment Date" class="form-control">
                    <select class="form-select form-control" aria-label="Default select example">
                      <option selected>Appointment Time-Frame</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
            <div class="form-heading">
                <h5><span>3.</span> Contact Details</h5>
            </div>
            <div class="form-flex thir">
                <input type="text" placeholder="Full Name" class="form-control">
                <input type="text" placeholder="Email Address" class="form-control">
                <input type="text" placeholder="Phone Number" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <textarea  class="form-control" placeholder="Message"></textarea>
        </div>
        <a href="#" class="btn book-now transition float-right">Book Now</a>
    </form>
</div>
</div>
</div>
</section>
<section class="free-shipping">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="row">
                    <div class="icon">
                        <i class="fa fa-plane"></i>
                    </div>
                    
                    <div class="content">
                        <h5>Free Shipping World Wide</h5>
                        <p>{{$datacontact ? $datacontact->free_shipping : ''}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="row">
                    <div class="icon credit">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <h5>Cash on Delivery</h5>
                        <p>{{$datacontact ? $datacontact->cash_on_delivery : ''}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="row">
                    <div class="icon">
                        <i class="fa fa-gift"></i>
                    </div>
                    <div class="content">
                        <h5>Special Gift Card</h5>
                        <p>{{$datacontact ? $datacontact->special_gift : ''}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="row">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="content">
                        <h5>24/7 Customer Service</h5>
                        <p>{{$datacontact ? $datacontact->customer_service : ''}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('frontend.layouts.footer')