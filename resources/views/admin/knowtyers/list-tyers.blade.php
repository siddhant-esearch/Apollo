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
   <li class="breadcrumb-item active" aria-current="page">Know Your Tyers Category</li>
 </ol>
 @if(session()->has('message2'))
 <div class="alert alert-default" id="final_msg" role="alert">
   <strong>Success!</strong>  {{ session()->get('message2') }}
 </div>
 @endif  
 @if(session()->has('message'))
 <div class="alert alert-success" id="final_msg" role="alert">
   <strong>Success!</strong>  {{ session()->get('message') }}
 </div>
 @endif 

 @if(session()->has('message3'))
 <div class="alert alert-danger" id="final_msg" role="alert">
   <strong>Success!</strong>  {{ session()->get('message3') }}
 </div>
 @endif
</div>



<!-- service details page -->
<div class="row">
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
       <div class="table-responsive">
        <div class="col-md-12">
          <div class="row">
          <div class="col-md-3">
          </div>
           <div class="col-md-6" style="text-align: center;">
            <div class="container">
              <img src="{{url('/images')}}/banner/{{$databanner ? $databanner->know_banner : ''}}" alt="Snow">
            </div>
            <button class="btn btn-default  mb-0 waves-effect waves-light" style="margin-top: 10px;" data-toggle="modal" data-target="#exampleModalservice">Change Banner</button>

            <div class="modal fade" id="exampleModalservice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h2 class="modal-title" id="exampleModalLabel">Change Banner</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="{{url('/update-know-banner')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                   <div style="overflow-x:auto;">
                     <input type="file" class="form-control" name="know_banner" id="know_banner" required />
                   </div>
                 </div>
                 <div class="modal-footer">
                   <button class="btn btn-primary">
                     <span class="btn-inner--icon"><i class="fas fa-edit"></i></span> Change</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">s
                       <span class="btn-inner--icon"><i class="fas fa-window-close"></i></span>
                       Close
                     </button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-3">
          </div>
          </div>
     <form style="margin-top: 58px;" action="{{url('/update-service-banner-dis')}}"  method="post">
       @csrf
       <div class="col-md-12">
        <div class="form-group mb-0">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="5" name="service_banner_dis" id="service_banner_dis">{{$databanner ? $databanner->know_details : ''}}</textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group mb-0" style="margin-top: 70px;">
          <center><button class="btn btn-icon  btn-primary mt-1 mb-1 add_faq" type="Submit">
            <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
            <span class="btn-inner--text">Update</span>
          </button></center>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>

<div class="row">
  <div class="col-md-12">
   <div class="card shadow">
    <div class="card-header">
     <h2 class="mb-0">List Know Tyers</h2>
     <a href="{{url('/add-service')}}" class="btn btn-primary mb-0 waves-effect waves-light" style="margin-left: 10px;">Add Services</a>

   </div>
   <div class="card-body">
    <div class="table-responsive">
     <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
       <thead>
         <tr>
          <th style="width:300px !important;"  class="wd-15p">S.No.</th>
          <th style="width:300px !important;"  class="wd-15p">Picture</th>
          <th style="width:300px !important;"  class="wd-15p">Service Name</th>
          <th  style="width:400px !important;" class="wd-15p">Service Descripation</th>
          <th  style="width:400px !important;" class="wd-15p">Details</th>
          <th  style="width:400px !important;" class="wd-15p">Action</th>           
        </tr>
      </thead>
      <tbody> 
        @if(!empty($dataproduct))
        <?php $i=1; ?>
        @foreach($dataproduct as $mydata)      
        <tr>
          <td><?php  echo $i;?></td>
          <td><img src="{{url('/images')}}/know/{{$mydata ? $mydata->picture : ''}}" style="width: 250px;"></td>
          <td style="white-space: break-spaces; word-wrap:break-word;">{{$mydata ? $mydata->heading : ''}}</td>
          <td  style="white-space: break-spaces; word-wrap:break-word;">{{$mydata ? $mydata->description : ''}}</td>
          <td>
           @if($mydata->details_status == 0)
           <a href="{{ url('/add-service-details') }}/{{$mydata ? $mydata->id : ''}}">Add Service Details</a>
           @else
           <a href="{{ url('/edit-service-details') }}/{{$mydata ? $mydata->detail_id : ''}}">View Service Details</a>
           @endif
         </td>
         <td class="text-nowrap">
           <a class="btn btn-icon btn-pill btn-primary  mt-1 mb-1" style="width: 10px; height: 40px;" href="" data-toggle="modal" data-target="#exampleModal24{{$mydata ? $mydata->id : ''}}" type="button" title="Edit Service">
             <span class="btn-inner--icon"><i class="fe fe-edit" style="color: #fff;margin-left: -8px;"></i></span>
           </a>
           <a class="btn btn-icon btn-pill btn-danger mt-1 mb-1" type="button" href="{{ url('/service-details-delete') }}/{{$mydata ? $mydata->id : ''}}/{{$mydata ? $mydata->detail_id : ''}}"   title="Delete FAQ" style="width: 10px; height: 40px;" onclick="return confirm('Are you sure you want to Delete this Service?');">
             <span class="btn-inner--icon" style="margin-left: -8px;"><i class="fe fe-trash"></i></span>
           </a>
           <div class="modal fade" id="exampleModal24{{$mydata ? $mydata->id : ''}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h2 class="modal-title" id="exampleModalLabel">Update Service</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="{{ url('/update-service') }}" method="post">
                  @csrf
                  <div class="modal-body">        

                    <div class="row">  
                      <div class="col-md-12">
                       <div class="form-group">
                         <label for="phn">Picture:</label>
                         <input class="form-control" type="file" id="picture" name="picture" value="{{$mydata ? $mydata->picture : ''}}">
                          <input class="form-control" type="hidden" id="tblid" name="tblid" value="{{$mydata ? $mydata->id : ''}}">
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-group">
                         <label for="name">Heading:</label>
                         <input class="form-control " type="text" id="heading" name="heading"  value="{{$mydata ? $mydata->heading : ''}}">
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-group">
                         <label for="name">Descripation:</label>
                         <textarea class="form-control " type="text" id="description" name="description" rows="5">{{$mydata ? $mydata->description : ''}}</textarea>
                       </div>
                     </div>
                   </div>
                 </div>   
                 <div class="modal-footer">
                   <button class="btn btn-primary" >
                     <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>Update</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">
                       <span class="btn-inner--icon"><i class="fas fa-window-close"></i></span>
                       Close
                     </button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </td>
       </tr>
       <?php $i++;?>
       @endforeach
       @else
       <tr>
        <td></td>
        <td></td>
        <td>No data found</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      @endif
    </tbody>
  </table>
</div>
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



<script>
    window.onload = function() {
       CKEDITOR.replace('service_banner_dis');
    };
</script>