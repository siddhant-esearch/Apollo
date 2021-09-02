@include('admin.layouts.header')
<!-- Page content -->
<div class="container-fluid pt-8">
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"  aria-current="page">Add Service</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
             <div class="card-header">
                <div class="row">
                 <div class="col-md-12">
                     <a href="{{url('/list-services')}}" class=" mb-0 waves-effect waves-light"><i class="angle fa fa-angle-left"></i> Back</a>
                 </div>
                 <div class="col-md-12">
                    <h2>Add Service</h2>
                </div>
          </div>
        </div>
        <div class="card-body">
         <form action="{{url('/submit-service-details')}}"  method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
             <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Picture</label>
                    <input type="file" class="form-control" name="image1" id="image1" required="">
                    <input type="hidden" name="tblid" id="tblid" value="{{$id}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Small Picture</label>
                    <input type="file" class="form-control" name="image2" id="image2" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-0">
                    <label class="form-label">Description1</label>
                    <textarea class="form-control" rows="5" name="description1" id="description1" required=""></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-0">
                    <label class="form-label">Description2</label>
                    <textarea class="form-control" rows="5" name="description2" id="description2" required=""></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Video</label>
                    <input type="file" class="form-control" name="video" id="video" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Heading after Video</label>
                    <input type="text" class="form-control" name="heading_after_video" id="heading_after_video" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group mb-0">
                    <label class="form-label">After Video Description</label>
                    <textarea class="form-control" rows="5" name="description_after_video" id="description_after_video" required=""></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Left Image</label>
                    <input type="file" class="form-control" name="left_image" id="left_image" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Left Heading</label>
                    <input type="text" class="form-control" name="left_heading" id="left_heading" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group mb-0">
                    <label class="form-label">Left Description</label>
                    <textarea class="form-control" rows="5" name="left_description" id="left_description" required=""></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Right Image</label>
                    <input type="file" class="form-control" name="right_image" id="right_image" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Right Heading</label>
                    <input type="text" class="form-control" name="right_heading" id="right_heading" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group mb-0">
                    <label class="form-label">Right Description</label>
                    <textarea class="form-control" rows="5" name="right_description" id="right_description" required=""></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group mb-0" style="margin-top: 70px;">
                    <center><button class="btn btn-icon  btn-primary mt-1 mb-1 add_faq" type="Submit">
                        <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
                        <span class="btn-inner--text">Add</span>
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
@include('admin.layouts.footer')
<script type="text/javascript">
  setTimeout(function(){$('#final_msg').fadeOut();}, 1000);
</script>

