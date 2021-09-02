@include('admin.layouts.header')

<div class="container-fluid pt-8">
 <div class="page-header mt-0 shadow p-3">
<ol class="breadcrumb mb-sm-0">
 <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
 <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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
  <div class="col-md-12">
   <div class="card shadow"> 
     <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <div class="row">
       <div class="col-md-4" style="text-align: center;">
        <div class="container">
  <img src="{{ url('/images/faq') }}/{{$imgdata ? $imgdata->pic1 : ''}}" alt="Snow" style="width: 350px; padding-right: 30px;">
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
    <form action="{{url('/update-picture1')}}"  method="post" enctype="multipart/form-data">
  @csrf
     <div class="modal-body">
     <div style="overflow-x:auto;">
       <input type="file" class="form-control" name="pic1" id="pic1" required />
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
<div class="col-md-4" style="text-align: center;">
        <div class="container">
  <img src="{{ url('/images/faq') }}/{{$imgdata ? $imgdata->pic2 : ''}}" alt="Snow" style="width: 350px;padding-right: 30px;">

</div>
  <button class="btn btn-default  mb-0 waves-effect waves-light" data-toggle="modal" style="margin-top: 10px;" data-target="#exampleModal2">Change Picture2</button>

           <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
     <h2 class="modal-title" id="exampleModalLabel">Change Pictur2</h2>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
      <form action="{{url('/update-picture2')}}" method="post" enctype="multipart/form-data">
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

<div class="col-md-4" style="text-align: center;">
        <div class="container">
  <img src="{{ url('/images/faq') }}/{{$imgdata ? $imgdata->pic3 : ''}}" alt="Snow" style="width: 350px; padding-right: 30px;">

</div>
  <button class="btn btn-default  mb-0 waves-effect waves-light" data-toggle="modal" style="margin-top: 10px;" data-target="#exampleModal2">Change Picture3</button>

           <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
     <h2 class="modal-title" id="exampleModalLabel">Change Pictur3</h2>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
      <form action="{{url('/update-picture3')}}"  method="post" enctype="multipart/form-data">
  @csrf
     <div class="modal-body">
     <div style="overflow-x:auto;">
       <input type="file" class="form-control" name="pic3" id="pic3" required />
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
<div class="row">
  <div class="col-md-12">
   <div class="card shadow">
    <div class="card-header">
       <h2 class="mb-0">FAQ</h2>
    <a href="{{url('/add-faq')}}" class="btn btn-primary mb-0 waves-effect waves-light">Add FAQ</a>
    </div>
     <div class="card-body">
      <div class="table-responsive">
       <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
       <thead>
       <tr>
        <th  class="wd-15p">S.No.</th>
        <th style="width:300px !important;"  class="wd-15p">Heading</th>
        <th  style="width:400px !important;" class="wd-15p">Descripation</th>
        <th  class="wd-15p">Action</th>
       </tr>
        </thead>
        <tbody>
        @if(!empty($data))
        <?php $i=1; ?>
        @foreach ($data as $udata)
        <tr>
        <td><?php  echo $i;?></td>
         <td style="white-space: break-spaces; word-wrap:break-word;"  class="text-sm font-weight-600">{{$udata->heading}}</td>
         <td style="white-space: break-spaces; word-wrap:break-word;">{{$udata->description}}</td>
         <td class="text-nowrap">
         <a class="btn btn-icon btn-pill btn-primary  mt-1 mb-1" style="width: 10px; height: 40px;" href="{{ url('/faq-edit')}}/{{$udata->id}}" type="button" title="Edit FAQS">
         <span class="btn-inner--icon"><i class="fe fe-edit" style="color: #fff;margin-left: -8px;"></i></span>
         </a>
         <a class="btn btn-icon btn-pill btn-danger mt-1 mb-1" type="button" href="{{ url('/faq-delete') }}/{{$udata->id}}"   title="Delete FAQ" style="width: 10px; height: 40px;" onclick="return confirm('Are you sure you want to Delete this FAQ?');">
         <span class="btn-inner--icon" style="margin-left: -8px;"><i class="fe fe-trash"></i></span>
         </a>
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



 