@include('admin.layouts.header')
<style>
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: 300px;
}


</style>
<div class="container-fluid pt-8">
 <div class="page-header mt-0 shadow p-3">
  <ol class="breadcrumb mb-sm-0">
   <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
   <li class="breadcrumb-item active" aria-current="page">About us management</li>
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
<!-- section-1 -->

<div class="row">
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <div class="row">
           <div class="col-md-6" style="text-align: center;">
            <div class="container">
              <img src="{{ url('/images/banner') }}/{{$databanner->about_banner}}" alt="Snow">
            </div>
            <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;" data-toggle="modal" data-target="#exampleModal1">Change Banner</button>

            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h2 class="modal-title" id="exampleModalLabel">Change Banner</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="{{url('/update-banner')}}" name="form1" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                   <div style="overflow-x:auto;">
                     <input type="file" class="form-control" name="banner" id="banner" required />
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
            <img src="{{ url('/images/banner') }}/{{$databanner->about_form_img}}" alt="Snow">

          </div>
          <button class="btn btn-default  mb-0 waves-effect waves-light" data-toggle="modal" style="margin-top: 10px;" data-target="#exampleModal2">Change Picture</button>

          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h2 class="modal-title" id="exampleModalLabel">Change Bottom Picture</h2>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="{{url('/update-picture')}}" name="form1" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                 <div style="overflow-x:auto;">
                   <input type="file" class="form-control" name="picture" id="picture" required />
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
</div>
</div>
</div>






<!-- section-2 -->

<div class="row">
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <div class="row">
           <div class="col-md-4" style="text-align: center;">
            <div class="container">
              <img src="{{ url('/images/about') }}/{{$data ? $data->about_pic : ''}}" alt="Snow">
            </div>
            <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;" data-toggle="modal" data-target="#exampleModal3">Change Picture</button>
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h2 class="modal-title" id="exampleModalLabel">Change Picture</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="{{url('/update-aboutpic')}}" name="form1" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                   <div style="overflow-x:auto;">
                     <input type="file" class="form-control" name="about_pic" id="about_pic" required />
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
         <div class="col-md-8" style="text-align: center;">
          <form method="post" action="{{url('/update-aboutcontent')}}">
               @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-label" style="float: left;">Heading</label>
                <input type="text" class="form-control" name="about_heading" id="about_heading"  autocomplete="off" value="{{$data ? $data->about_heading : ''}}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-0">
                <label class="form-label" style="float: left;">Description <span id="display_count" style="margin-left: 10px;">0</span>/<span id="word_left">150</span></label>
                <textarea class="form-control" rows="5" name="about_dis" id="about_dis">{{$data ? $data->about_dis : ''}}</textarea>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label" style="float: left;">Point1</label>
                <input type="text" class="form-control" name="point1" id="point1"  autocomplete="off" value="{{$data ? $data->point1 : ''}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label" style="float: left;">Point2</label>
                <input type="text" class="form-control" name="point2" id="point2" value="{{$data ? $data->point2 : ''}}"  autocomplete="off">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label" style="float: left;">Point3</label>
                <input type="text" class="form-control" name="point3" id="point3" value="{{$data ? $data->point3 : ''}}"  autocomplete="off">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label" style="float: left;">Point4</label>
                <input type="text" class="form-control" name="point4" id="point4" value="{{$data ? $data->point4 : ''}}" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label" style="float: left;">Point5</label>
                <input type="text" class="form-control" name="point5" id="point5"  value="{{$data ? $data->point5 : ''}}" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label" style="float: left;">Point6</label>
                <input type="text" class="form-control" name="point6" id="point6"  value="{{$data ? $data->point6 : ''}}" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-0" style="margin-top: 70px;">
                <center><button class="btn btn-icon  btn-primary mt-1 mb-1 add_terms" type="Submit">
                  <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
                  <span class="btn-inner--text">Update</span>
                </button></center>
              </div>
            </div>

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








<!-- section-3 -->

<div class="row">
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <div class="row">
           <div class="col-md-4" style="text-align: center;">
            <div class="container">
              <img src="{{ url('/images/about') }}/{{$data ? $data->whypicture : ''}}" alt="Snow">
            </div>
            <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;" data-toggle="modal" data-target="#exampleModal4">Change Background</button>

            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h2 class="modal-title" id="exampleModalLabel">Change Background</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="{{url('/update-whypicture')}}" name="form1" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                   <div style="overflow-x:auto;">
                     <input type="file" class="form-control" name="whypicture" id="whypicture" required />
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
         <div class="col-md-8" style="text-align: center;">
            <form action="{{url('/update-whycontant')}}" method="post">
                  @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-label" style="float: left;">Heading</label>
                <input type="text" class="form-control" name="why_heading" id="why_heading" value="{{$data ? $data->why_heading : ''}}" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-0">
                <label class="form-label">Description </label>
                <textarea class="form-control" rows="5" name="why_description" id="why_description">{!!$data ? $data->why_description : '' !!}</textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-0" style="margin-top: 70px;">
                <center><button class="btn btn-icon  btn-primary mt-1 mb-1 add_terms" type="Submit">
                  <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
                  <span class="btn-inner--text">Update</span>
                </button></center>
              </div>
            </div>
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

<!-- section-4 -->


<div class="row">
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <div class="row">
           <div class="col-md-4" style="text-align: center;">
            <div class="container">
              <img src="{{ url('/images/about') }}/{{$data ? $data->contact_pic : ''}}" alt="Snow">
            </div>
            <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;" data-toggle="modal" data-target="#exampleModal5">Change Background</button>

            <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h2 class="modal-title" id="exampleModalLabel">Change Background</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="{{url('/update-contactpicture')}}" name="form1" method="post" enctype="multipart/form-data">
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
         <div class="col-md-8" style="text-align: center;">
            <form action="{{url('/update-contactcontent')}}"  method="post">
                  @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-label" style="float: left;">Description1 </label>
                <textarea class="form-control" rows="5" name="contact_dis1" id="contact_dis1">{{$data ? $data->contact_dis1 : ''}}</textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-0">
                <label class="form-label" style="float: left;">Description2 </label>
                <textarea class="form-control" rows="5" name="contact_dis2" id="contact_dis2">{{$data ? $data->contact_dis2 : ''}} </textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-0" style="margin-top: 70px;">
                <center><button class="btn btn-icon  btn-primary mt-1 mb-1 add_terms" type="Submit">
                  <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
                  <span class="btn-inner--text">Update</span>
                </button></center>
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>





</div>
@include('admin.layouts.footer')

<script>
    window.onload = function() {
       CKEDITOR.replace('why_description');
    };
     setTimeout(function(){$('#final_msg').fadeOut();}, 3000);
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#description").on('keyup', function() {
      var words = 0;

      if ((this.value.match(/\S+/g)) != null) {
        words = this.value.match(/\S+/g).length;
      }

      if (words > 150) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 150).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#display_count').text(words);
      $('#word_left').text(150-words);
    }
  });
  });
</script>

