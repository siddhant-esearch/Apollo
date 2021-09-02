@include('admin.layouts.header')

<div class="container-fluid pt-8">
 <div class="page-header mt-0 shadow p-3">
  <ol class="breadcrumb mb-sm-0">
  <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
  <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
  </ol>
  @if(session()->has('message1'))
  <div class="alert alert-warning" id="final_msg" role="alert">
  <strong>Success!</strong>  {{ session()->get('message1') }}
  </div>
  @endif
</div>
<div class="row">
<!-- BASIC WIZARD -->
 <div class="col-xl-12">
  <div class="card m-b-20">
   <div class="card-header">
  <h2 class="mb-0">Profile Setting</h2>
  @if(session()->has('message'))
  <div class="alert alert-success" id="final_msg" role="alert" style="margin-top: -38px;
    margin-left: 201px;">
  <strong>Success!</strong>  {{ session()->get('message') }}
  </div>
  @endif
  </div>
  <div class="card-body">
   <div id="basicwizard" class="border pt-0">
   <ul class="nav nav-tabs nav-justified">
   <li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link font-bold">Profile </a></li>
   <li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link font-bold">Change Password</a></li>
   <li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link font-bold">Change Profile Picture</a></li>
  </ul>
  <div class="tab-content card-body  b-0 mb-0">
     <div class="tab-pane fade" id="tab1">
  <form action="{{ url('/update-profile') }}" method="post" name="form1"  onsubmit="return validateForm()"  enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-12">
     <div class="form-group clearfix">
    <div class="row ">
     <div class="col-lg-3">
      <label class="control-label form-label" for="name" >Name</label>
      </div>
    <div class="col-lg-9">
    <input id="name" name="name" type="text" class="required form-control" value="{{$profiledata->name}}">
    </div>
    </div>
    </div>
    <div class="form-group clearfix">
     <div class="row ">
      <div class="col-lg-3">
       <label class="control-label form-label" for="surname">Mobile Number</label>
      </div>
      <div class="col-lg-9">
      <input id="mobile" name="mobile" type="text" class="required form-control" value="{{$profiledata->mobile}}">
     </div>
    </div>
    </div>

<div class="form-group clearfix">
  <div class="row ">
    <div class="col-lg-3">
   <label class="control-label " for="email">Email</label>
  </div>
  <div class="col-lg-9">
   <input id="email" name="email" type="text" class="required email form-control" value="{{$profiledata->email}}">
  </div>
  </div>
  </div>

</div>
</div>                
<div style="text-align: end;"><button class="btn btn-primary mb-0 waves-effect waves-light update_profile">Submit</button>
</div>
</form>
</div>

<!--  change password section  -->
<div class="tab-pane fade" id="tab2">
<form action="{{ url('/update-profile-password') }}" method="post" name="form2"   onsubmit="return validateForm2()">
  @csrf
<div class="row">
 <div class="col-12">
  <div class="form-group  clearfix">
    <div class="row ">
   <div class="col-lg-3">
     <label class="control-label form-label " for="password"> Password</label>
     </div>
      <div class="col-lg-9">
    <input id="new_password" name="new_password" type="text" class="required form-control">
    </div>
  </div>
  </div>
  <div class="form-group clearfix">
   <div class="row ">
    <div class="col-lg-3">
    <label class="control-label form-label" for="confirm">Confirm Password</label>
    </div>
   <div class="col-lg-9">
    <input id="re_password" name="re_password" type="text" class="required form-control">
   </div>
  </div>
  </div>
  <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
    </div>
</div>
</div>
<div style="text-align: end;"><button class="btn btn-primary mb-0 waves-effect waves-light">Change</button>
</div>
</form>
</div>
<!-- close change password section -->


<!-- profile picture section  -->
<div class="tab-pane fade" id="tab3">
  <form action="{{ url('/update-profile-pic') }}" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
    @csrf  
    <div class="row">
     <div class="col-md-4">
      <div class="form-group">
      <label class="form-label">Upload Image</label>
      <input type="file" class="form-control" name="profile_picture"  id="profile_picture" required="">
      <input type="hidden" name="account_type" value="Trader">
      </div>
    @if(session()->has('message1'))
    <span class="text-danger" id="final_msg1" role="alert">
    <strong>Opps!</strong>   {{ session()->get('message1') }}
    </span>
    @endif
     </div>
 
     <div class="col-md-4">
     <div class="form-group mb-0" style="margin-top: 25px;">
     <center><button class="btn btn-icon  btn-primary mt-1 mb-1" type="Submit" >
     <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
     <span class="btn-inner--text">Submit</span>
     </button></center>
     </div>
    </div>
    </div>
</form>
</div>
<!--  close profile picture section  -->

</div>
</div>
</div>
</div>
</div>
</div>
<!-- end row -->
</div>
@include('admin.layouts.footer')

<script type="text/javascript">
 function validateEmail(emailField){
 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if (reg.test(emailField.value) == false) 
  {
  jQuery('#email').after('<p id="idremove" style="color:red;height: 8px;">Opps! Invalid Email Please Enter Correct.</p>');
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
</script>
<script type="text/javascript">
function validateForm() {
var name = document.forms["form1"]["name"].value;
var email = document.forms["form1"]["email"].value;
var mobile = document.forms["form1"]["mobile"].value;
 if (name == "") {
  jQuery('#name').after('<p id="idremove" style="color:red;height: 8px;">Please Enter Name</p>');
  return false;
 }
 if (email == "") {
  jQuery('#email').after('<p id="idremove" style="color:red;height: 8px;">Please Enter Email</p>');
  return false;
}
if (mobile == "") {
  jQuery('#mobile').after('<p id="idremove" style="color:red;height: 8px;">Please Enter Mobile Number</p>');
  return false;
}
}
setTimeout(function(){$('#final_msg').fadeOut();}, 2000);
setTimeout(function(){$('#idremove').fadeOut();}, 5000);
</script>
<script type="text/javascript">
 function passwordmsg(emailField){
   jQuery('#new_password').after('<p id="idremove" style="color:orange;height: 8px;">Password Should be minimum 6 digits maximum 10 digit.</p>');
 }
function checkPasswordMatch() {
   var password = $("#new_password").val();
    var confirmPassword = $("#re_password").val();
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Passwords does not match!");
    else
        $("#CheckPasswordMatch").html("Passwords match.");
              // setTimeout(function(){$('#CheckPasswordMatch').fadeOut();}, 3000);
          }
          $(document).ready(function () {
             $("#re_password").keyup(checkPasswordMatch);
         });

     </script>

<script type="text/javascript">
 function validateForm2() {
var password = document.forms["form2"]["new_password"].value;
var confirmPassword = document.forms["form2"]["re_password"].value;
  
                

                if (password == "") {
                  jQuery('#new_password').after('<p id="idremove" style="color:red;height: 8px;">Please Enter Password</p>');
                  return false;
                }
              

                if (confirmPassword == "") {
                  jQuery('#re_password').after('<p id="idremove" style="color:red;height: 8px;">Please Enter Confirm Password</p>');
                  return false;
                }
                
                
              
                

              }
              
              setTimeout(function(){$('#idremove').fadeOut();}, 5000);
            </script>
<script>
setTimeout(function(){$('#final_msg1').fadeOut();}, 2000);
</script>

<script type="text/javascript">
  function Validate(oForm) {
   //var _validFileExtensions = [".jpg", ".jpeg", ".doc", ".pdf", ".png",".docx"];    
    var _validFileExtensions = [".jpg", ".jpeg", ".png",];    
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
      var oInput = arrInputs[i];
      if (oInput.type == "file") {
        var sFileName = oInput.value;
        if (sFileName.length > 0) {
          var blnValid = false;
          for (var j = 0; j < _validFileExtensions.length; j++) {
            var sCurExtension = _validFileExtensions[j];
            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
              blnValid = true;
              break;
            }
          }

          if (!blnValid) {
            alert("Sorry,This file is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
            return false;
          }


        }
      }
    }

    return true;
  }

</script>