@include('admin.layouts.header')
<style>
.container {
  position: relative;
  width: 100%;
  
}

.container img {
  width: 100%;
  height: 220px;
}
.container1 {
  position: relative;
  width: 100%;
  max-width: 100px;
}

.container1 img {
  width: 100%;
  height: 100px;
}

</style>
<div class="container-fluid pt-8">
 <div class="page-header mt-0 shadow p-3">
  <ol class="breadcrumb mb-sm-0">
   <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
   <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
 </ol>
 @if(session()->has('message'))
 <div class="alert alert-default" id="final_msg" role="alert">
   <strong>Success!</strong>  {{ session()->get('message') }}
 </div>
 @endif  
 @if(!empty($successMsg))
 <div class="alert alert-success" id="final_msg"> {{ $successMsg }}</div>
 @endif
 @if(session()->has('message3'))
 <div class="alert alert-danger" id="final_msg" role="alert">
   <strong>Success!</strong>  {{ session()->get('message3') }}
 </div>
 @endif
</div>
<div class="row">
 <div class="col-md-6">
   <div class="card shadow"> 
     <div class="card-header">
      <h2 class="mb-0">Website Details</h2>
    </div>
    <div class="card-body">
      <form action="{{url('/save-contact-details')}}" name="form1"  onsubmit="return validateForm()" method="post">
       @csrf
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label class="form-label">Mobile Number</label>
             <input type="text" class="form-control" name="mobile"   id="mobile" value="{{$data ? $data->mobile : ''}}"  maxlength="20">
           </div>
         </div>
         <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">After Mobile Number</label>
            <input type="text" class="form-control" name="after_mobile" id="after_mobile"  value="{{$data ? $data->after_mobile : ''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$data ? $data->email : ''}}" onblur="validateEmail(this);">
          </div>
        </div>
        
        
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">After Email</label>
            <input type="text" class="form-control" name="after_email" id="after_email" value="{{$data ? $data->after_email : ''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Address</label>
            <textarea type="text" class="form-control" name="address" id="address" >{{$data ? $data->address : ''}} </textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Facebook URL</label>
            <input type="text" class="form-control" name="facebook_url" id="facebook_url"  value="{{$data ? $data->facebook_url : ''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Instagram URL</label>
            <input type="text" class="form-control" name="instagram_url" id="instagram_url"  value="{{$data ? $data->instagram_url : ''}}">
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Youtube URL</label>
            <input type="text" class="form-control" name="youtube_url" id="youtube_url"  value="{{$data ? $data->youtube_url : ''}}">
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Twitter URL</label>
            <input type="text" class="form-control" name="twitter_url" id="twitter_url"  value="{{$data ? $data->twitter_url : ''}}">
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Linkedin URL</label>
            <input type="text" class="form-control" name="linkedin_url" id="linkedin_url"  value="{{$data ? $data->linkedin_url : ''}}">
          </div>
        </div>
        <div class="col-md-12">
         <div class="form-group mb-0">
          <center>
            <button class="btn btn-icon  btn-primary mt-1 mb-1 add_plan" type="Submit">
              <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
              <span class="btn-inner--text">Update</span>
            </button>
          </center>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</div>
<div class="col-md-6">
 <div class="card shadow"> 
   <div class="card-header">
    <h2 class="mb-0">Update Logo & Favicon</h2>
  </div>
  <div class="card-body">
    <div class="row"> 
      <div class="col-md-12">
        
        <div class="container">
          <img src="{{ url('/images/logo') }}/{{$data ? $data->logo1 : ''}}" alt="Snow">
        </div>
        <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;    margin-left: 130px;" data-toggle="modal" data-target="#exampleModal1">Change Logo1</button>

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h2 class="modal-title" id="exampleModalLabel">Change Logo</h2>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <form action="{{url('/update-logo')}}" name="form1" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
               <div style="overflow-x:auto;">
                 <input type="file" class="form-control" name="logo" id="logo" required />
               </div>
             </div>
             <div class="modal-footer">
               <button class="btn btn-primary">
                 <span class="btn-inner--icon"><i class="fas fa-edit"></i></span> Change</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">
                   <span class="btn-inner--icon"><i class="fas fa-window-close"></i></span>
                   Close
                 </button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
 
        <div class="col-md-6">
        
        <div class="container">
          <img src="{{ url('/images/logo') }}/{{$data ? $data->logo2 : ''}}" alt="Snow" style="height: 100px;">
        </div>
        <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;    margin-left: 60px;" data-toggle="modal" data-target="#exampleModal1">Change Logo2</button>

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h2 class="modal-title" id="exampleModalLabel">Change Logo2</h2>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <form action="{{url('/update-logo')}}" name="form1" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
               <div style="overflow-x:auto;">
                 <input type="file" class="form-control" name="logo" id="logo" required />
               </div>
             </div>
             <div class="modal-footer">
               <button class="btn btn-primary">
                 <span class="btn-inner--icon"><i class="fas fa-edit"></i></span> Change</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">
                   <span class="btn-inner--icon"><i class="fas fa-window-close"></i></span>
                   Close
                 </button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>


         <div class="col-md-6">
      <div class="container1">
        <img src="{{ url('/images/logo') }}/{{$data->favicon}}" alt="Snow">

      </div>
      <button class="btn btn-default  mb-0 waves-effect waves-light" data-toggle="modal" style="margin-top: 10px;" data-target="#exampleModal2">Change Favicon</button>

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h2 class="modal-title" id="exampleModalLabel">Change Favicon</h2>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <form action="{{url('/update-favicon')}}" name="form1" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
             <div style="overflow-x:auto;">
               <input type="file" class="form-control" name="favicon" id="favicon" required />
             </div>
           </div>
           <div class="modal-footer">
             <button class="btn btn-primary">
               <span class="btn-inner--icon"><i class="fas fa-edit"></i></span> Change</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">
                 <span class="btn-inner--icon"><i class="fas fa-window-close"></i></span>
                 Close
               </button>
             </div>
           </form>
         </div>
       </div>
     </div>
     
   </div>

</div>
</div>
</div>
</div>

<div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-header">
      <h2 class="mb-0">Website Details</h2>
    </div>
    <div class="card-body">
      <form action="{{url('/save-contact-data')}}" name="form1"  onsubmit="return validateForm()" method="post">
       @csrf
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label class="form-label">Free Shipping World Wide</label>
             <input type="text" class="form-control" name="free_shipping"   id="free_shipping" value="{{$data ? $data->free_shipping : ''}}"  maxlength="20">
           </div>
         </div>
         <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Cash on Delivery</label>
            <input type="text" class="form-control" name="cash_on_delivery" id="cash_on_delivery"  value="{{$data ? $data->cash_on_delivery : ''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Special Gift Card</label>
            <input type="email" class="form-control" name="special_gift" id="special_gift" value="{{$data ? $data->special_gift : ''}}" onblur="validateEmail(this);">
          </div>
        </div>
        
        
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">24/7 Customer Service</label>
            <input type="text" class="form-control" name="customer_service" id="customer_service" value="{{$data ? $data->customer_service : ''}}">
          </div>
        </div>
        
        <div class="col-md-12">
         <div class="form-group mb-0">
          <center>
            <button class="btn btn-icon  btn-primary mt-1 mb-1 add_plan" type="Submit">
              <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
              <span class="btn-inner--text">Update</span>
            </button>
          </center>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</div>



<div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-header">
      <h2 class="mb-0">Contact Form Details</h2>
    </div>

    <div class="card-body">
      <div class="row">
       <div class="col-md-6" style="text-align: center;">
          <div class="container">
          <img src="{{ url('/images/contact') }}/{{$data ? $data->contact_banner : ''}}" alt="Snow">
        </div>
        <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;    margin-left: 60px;" data-toggle="modal" data-target="#exampleModal1">Change Contact Banner</button>

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h2 class="modal-title" id="exampleModalLabel">Change Contact Banner</h2>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <form action="{{url('/update-contact-banner')}}" name="form1" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
               <div style="overflow-x:auto;">
                 <input type="file" class="form-control" name="contact_banner" id="contact_banner" required />
               </div>
             </div>
             <div class="modal-footer">
               <button class="btn btn-primary">
                 <span class="btn-inner--icon"><i class="fas fa-edit"></i></span> Change</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">
                   <span class="btn-inner--icon"><i class="fas fa-window-close"></i></span>
                   Close
                 </button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>


          <div class="col-md-6" style="text-align: center;">
          <div class="container">
        <img src="{{ url('/images/contact') }}/{{$data ? $data->contact_pic : ''}}" alt="Snow">

      </div>
      <button class="btn btn-default  mb-0 waves-effect waves-light" data-toggle="modal" style="margin-top: 10px;" data-target="#exampleModal2">Change Contact Picture</button>

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h2 class="modal-title" id="exampleModalLabel">Change Contact Picture</h2>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <form action="{{url('/update-contact-picture')}}" name="form1" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
             <div style="overflow-x:auto;">
               <input type="file" class="form-control" name="contact_pic" id="contact_pic" required />
             </div>
           </div>
           <div class="modal-footer">
             <button class="btn btn-primary">
               <span class="btn-inner--icon"><i class="fas fa-edit"></i></span> Change</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">
                 <span class="btn-inner--icon"><i class="fas fa-window-close"></i></span>
                 Close
               </button>
             </div>
           </form>
         </div>
       </div>
     </div>
     
   </div>

      </div>
      <form action="{{url('/update-contact-content')}}" name="form1"  onsubmit="return validateForm()" method="post">
       @csrf
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label class="form-label">Contact Discripation</label>
               <textarea type="text" class="form-control" name="contact_dis" id="contact_dis">{{$data ? $data->contact_dis : ''}} </textarea>
           </div>
         </div>
         <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Map URL</label>
             <textarea type="text" class="form-control" name="map_url" id="map_url">{{$data ? $data->map_url : ''}} </textarea>
          </div>
        </div>
           
        <div class="col-md-12">
         <div class="form-group mb-0">
          <center>
            <button class="btn btn-icon  btn-primary mt-1 mb-1 add_plan" type="Submit">
              <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
              <span class="btn-inner--text">Update</span>
            </button>
          </center>
        </div>
      </div>
    </div>
  </form>


 


</div>
</div>
</div>
</div>
</div>

@include('admin.layouts.footer')
<script>
  $(function(e) {
    $('#example').DataTable();
  } );
  setTimeout(function(){$('#final_msg').fadeOut();}, 3000);
</script>


<script type="text/javascript">
 function validateEmail(emailField){
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   if (reg.test(emailField.value) == false) 
   {
    jQuery('#email').after('<p id="idremove" style="color:red;height: 8px;">Opps! Invalid Email Please Enter Correct.</p>');
    setTimeout(function(){$('#idremove').fadeOut();}, 4000);
    return false;
  }
  return true;
}
function nummeric(e, t) {
  var regexp = new RegExp(/^[0-9]+$/);
  if (window.event) {
    keynum = e.keyCode;
  } else if (e.which) {
    keynum = e.which;
  }
  var test = regexp.test(String.fromCharCode(keynum));
  return test;
}

function onlyAlphabets(e, t) {
 var regexp = new RegExp(/^[a-zA-Z]*$/);
 if (window.event) {
   keynum = e.keyCode;
 } else if (e.which) {
   keynum = e.which;
 }
 var test = regexp.test(String.fromCharCode(keynum));
 return test;
}


</script>

