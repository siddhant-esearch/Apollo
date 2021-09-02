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
         <form action="{{url('/add-service-data')}}"  method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
             <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Service Picture</label>
                    <input type="file" class="form-control" name="service_image" id="service_image" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Service Name</label>
                    <input type="text" class="form-control" name="service_name" id="service_name" autocomplete="off" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group mb-0">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="5" name="service_discription" id="service_discription" required=""></textarea>
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

