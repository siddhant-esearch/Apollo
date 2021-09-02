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
   <li class="breadcrumb-item active" aria-current="page">Index Data</li>
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
      <form action="{{url('/add-discount')}}"  method="post" enctype="multipart/form-data">
       @csrf
       <div class="row">
         <div class="col-md-6">
           <label class="form-label">Images</label>
           <input type="file" class="form-control" name="discount_image" id="discount_image" required="">
         </div>
          <div class="col-md-6">
           <label class="form-label">Discount For</label>
           <input type="text" class="form-control" name="discount_for" id="discount_for" required="">
         </div>
          <div class="col-md-6">
           <label class="form-label">Discount</label>
           <input type="text" class="form-control" name="discount" id="discount" required="">
         </div>
         <div class="col-md-6" style="margin-top: 31px;">
          <button class="btn btn-primary mb-0 waves-effect waves-light" type="Submit">Submit</button>
        </div>
      </div>
    </form>
    <div class="row" style="margin-top: 20px;">
      <div class="table-responsive">
       <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
         <thead>
           <tr>
             <th style="width:300px !important;"  class="wd-15p">S.No.</th>
             <th  style="width:400px !important;" class="wd-15p">Image</th>
             <th  style="width:400px !important;" class="wd-15p">Discout For</th>
             <th  style="width:400px !important;" class="wd-15p">Discount</th>
             <th  style="width:400px !important;" class="wd-15p">Action</th>           
           </tr>
         </thead>
         <tbody>      
          <tr>
            @if(!empty($discountdata))
                   <?php $i=1;?>
                    @foreach ($discountdata as $result)  
           <td style="white-space: break-spaces; word-wrap:break-word;"  class="text-sm font-weight-600"><?php echo $i;?></td>
           <td><img src="{{url('/images')}}/discountimages/{{$result ? $result->image : ''}}" style="width: 150px;"></td>
           <td>{{$result ? $result->discount_for : ''}}</td>
           <td>{{$result ? $result->discount : ''}}</td>
           <td class="text-nowrap">
             <a class="btn btn-icon btn-pill btn-primary  mt-1 mb-1" style="width: 10px; height: 40px;" href="{{ url('/edit-discount') }}/{{$result ? $result->id : ''}}" type="button" title="Edit Point">
               <span class="btn-inner--icon"><i class="fe fe-edit" style="color: #fff;margin-left: -8px;"></i></span>
             </a>
               <a class="btn btn-icon btn-pill btn-danger mt-1 mb-1" type="button" href="{{ url('/delete-point') }}/{{$result ? $result->id : ''}}"   title="Delete Point" style="width: 10px; height: 40px;" onclick="return confirm('Are you sure you want to Delete this Discount?');">
                 <span class="btn-inner--icon" style="margin-left: -8px;"><i class="fe fe-trash"></i></span>
               </a>
             </td>
           </tr>
           <?php $i++;?>
           @endforeach
           @else
           <tr><td></td><td>No data found</td><td></td></tr>
           @endif
         </tbody>
       </table>
     </div>
   </div>
 </div>
</div>
</div>
</div>
<!-- section-1 close -->




<!-- section-2 -->
<div class="row">
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <div class="row">
           <div class="col-md-6" style="text-align: center;">
            <div class="container">
              <img src="{{url('/images')}}/indexpics/{{$data ? $data->pic1 : ''}}" alt="Snow">
            </div>
            <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;" data-toggle="modal" data-target="#exampleModal1">Change Picture1</button>
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h2 class="modal-title" id="exampleModalLabel">Change Picture1</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="{{url('/update-index-pic1')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                   <div style="overflow-x:auto;">
                     <input type="file" class="form-control" name="pic1" id="pic1" required/>
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
           <img src="{{url('/images')}}/indexpics/{{$data ? $data->pic2 : ''}}" alt="Snow">
         </div>
         <button class="btn btn-default  mb-0 waves-effect waves-light" data-toggle="modal" style="margin-top: 10px;" data-target="#exampleModal2">Change Picture2</button>
         <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h2 class="modal-title" id="exampleModalLabel">Change Picture2</h2>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="{{url('/update-index-pic2')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                 <div style="overflow-x:auto;">
                   <input type="file" class="form-control" name="pic2" id="pic2" required />
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
       <div class="col-md-8">
        <form action="{{url('/update-index-content')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-label" style="float: left;">Heading</label>
                <input type="text" class="form-control" name="heading_after_slide" id="heading_after_slide" value="{{$data ? $data->heading_after_slide : ''}}" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-0">
                <label class="form-label">Description <span id="description_after_slide_word" style="margin-left: 10px;">0</span>/<span id="word_left">35</span></label>
                <textarea class="form-control" rows="5" name="description_after_slide" id="description_after_slide">{{$data ? $data->description_after_slide : ''}}</textarea>
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




<!-- section-3-->
<div class="row">
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <h2 class="mb-0">We Have</h2>
          <div class="row">

           <div class="col-md-12">
            <form action="{{url('/update-we-have-content')}}" method="post">
              @csrf
              <div class="row">
               <div class="col-md-12">
                <div class="form-group mb-0">
                  <label class="form-label">Description </label>
                  <textarea class="form-control" rows="5" name="we_have_description" id="we_have_description">{{$data ? $data->we_have_description : ''}}</textarea>
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
           <div class="col-md-12" style="text-align: center;">
            <div class="container">
              <img src="{{url('/images')}}/indexpics/{{$data ? $data->after_we_have_pic : ''}}" alt="Snow">
            </div>
            <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;" data-toggle="modal" data-target="#exampleModal4">Change Image</button>

            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h2 class="modal-title" id="exampleModalLabel">Change Image</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="{{url('/update-after-we-have-pic')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                   <div style="overflow-x:auto;">
                     <input type="file" class="form-control" name="after_we_have_pic" id="after_we_have_pic" required />
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
         <div class="col-md-12" style="text-align: center;">
          <form action="{{url('/update-after-we-details')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label" style="float: left;">Heading</label>
                  <input type="text" class="form-control" name="after_we_have_heading" id="after_we_have_heading" value="{{$data ? $data->after_we_have_heading : ''}}" autocomplete="off">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-0">
                  <label class="form-label">Description </label>
                  <textarea class="form-control" rows="5" name="after_we_have_description" id="after_we_have_description">{{$data ? $data->after_we_have_description : ''}}</textarea>
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






<!-- section-5 -->
<div class="row">
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <div class="row">
           <div class="col-md-12" style="text-align: center;">
            <form action="{{url('/update-last-index-details')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label" style="float: left;">Inspection</label>
                    <textarea class="form-control" rows="3" name="inspection_dis" id="inspection_dis">{{$data ? $data->inspection_dis : ''}}</textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group mb-0">
                    <label class="form-label">Diagnostic </label>
                    <textarea class="form-control" rows="3" name="diagnostic_dis" id="diagnostic_dis">{{$data ? $data->diagnostic_dis : ''}}</textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group mb-0">
                    <label class="form-label">Upgrades </label>
                    <textarea class="form-control" rows="3" name="upgrades_dis" id="upgrades_dis">{{$data ? $data->upgrades_dis : ''}}</textarea>
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
    $("#description_after_slide_word").on('keyup', function() {
      var words = 0;

      if ((this.value.match(/\S+/g)) != null) {
        words = this.value.match(/\S+/g).length;
      }

      if (words > 35) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 35).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#description_after_slide_word').text(words);
      $('#word_left').text(35-words);
    }
  });
  });
</script>

