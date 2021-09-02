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
 <li class="breadcrumb-item active" aria-current="page">Product List</li>
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
   <h2 class="mb-0">Product Page Banner</h2>
    <div class="table-responsive">
      <div class="col-md-12">
        <div class="row">
        <div class="col-md-2">
        </div>
         <div class="col-md-8" style="text-align: center;">
          <div class="container">
            <img src="{{url('/images')}}/banner/{{$databanner ? $databanner->product_banner : ''}}" alt="Snow">
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
               <form action="{{url('/update-product-banner')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                 <div style="overflow-x:auto;">
                   <input type="file" class="form-control" name="product_banner" id="product_banner" required />
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
       <div class="col-md-2">
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
   <h2 class="mb-0">List Product</h2>
   <a href="{{url('/add-product')}}" class="btn btn-primary mb-0 waves-effect waves-light" style="margin-left: 10px;">Add Product</a>

 </div>
 <div class="card-body">
  <div class="table-responsive">
   <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
     <thead>
       <tr>
        <th  style="width:300px !important;"  class="wd-15p">S.No.</th>
        <th  style="width:300px !important;"  class="wd-15p">Product image</th>
        <th  style="width:300px !important;"  class="wd-15p">Product Number</th>
        <th  style="width:300px !important;"  class="wd-15p">Product Name</th>
        <th  style="width:400px !important;" class="wd-15p">Product Short Descripation</th>
        <th  style="width:400px !important;" class="wd-15p">Product Short rate</th>
        <th  style="width:400px !important;" class="wd-15p">Product Type</th>
        <th  style="width:400px !important;" class="wd-15p">Details</th>
        <th  style="width:400px !important;" class="wd-15p">Action</th>           
      </tr>
    </thead>
    <tbody> 
      @if(!empty($dataproduct))
      <?php $i=1; ?>
      @foreach($dataproduct as $productdata)      
      <tr>
        <td><?php  echo $i;?></td>
        <td>
        <img src="{{url('/images')}}/product/{{$productdata ? $productdata->product_image : ''}}" style="width: 110px;">  </td>
        <td style="white-space: break-spaces; word-wrap:break-word;">{{$productdata ? $productdata->product_number : ''}}</td>
         <td  style="white-space: break-spaces; word-wrap:break-word;">{{$productdata ? $productdata->product_name : ''}}</td>
          <td  style="white-space: break-spaces; word-wrap:break-word;">{{$productdata ? $productdata->product_dis : ''}}</td>
          <td  style="white-space: break-spaces; word-wrap:break-word;">{{$productdata ? $productdata->product_rate : ''}}</td>
          <td  style="white-space: break-spaces; word-wrap:break-word;">{{$productdata ? $productdata->product_type : ''}}</td>
        <td>
         @if($productdata->details_status == 0)
         <a href="{{ url('/add-product-details') }}/{{$productdata ? $productdata->id : ''}}">Add Service Details</a>
         @else
         <a href="{{ url('/edit-product-details') }}/{{$productdata ? $productdata->details_id : ''}}">View Service Details</a>
         @endif
       </td>
       <td class="text-nowrap">
         <a class="btn btn-icon btn-pill btn-primary  mt-1 mb-1" style="width: 10px; height: 40px;" href="" data-toggle="modal" data-target="#exampleModal24{{$productdata ? $productdata->id : ''}}" type="button" title="Edit Service">
           <span class="btn-inner--icon"><i class="fe fe-edit" style="color: #fff;margin-left: -8px;"></i></span>
         </a>
         <a class="btn btn-icon btn-pill btn-danger mt-1 mb-1" type="button" href="{{ url('/product-delete') }}/{{$productdata ? $productdata->id : ''}}/{{$productdata ? $productdata->details_id : ''}}"   title="Delete Product" style="width: 10px; height: 40px;" onclick="return confirm('Are you sure you want to Delete this Product?');">
           <span class="btn-inner--icon" style="margin-left: -8px;"><i class="fe fe-trash"></i></span>
         </a>
         <div class="modal fade" id="exampleModal24{{$productdata ? $productdata->id : ''}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h2 class="modal-title" id="exampleModalLabel">Update Product</h2>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="{{ url('/update-product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">        

                  <div class="row">  
                    <div class="col-md-12">
                     <div class="form-group">
                       <label for="phn">Product Picture:</label>
                       <input class="form-control" type="file" id="product_image" name="product_image" value="{{$productdata ? $productdata->product_image : ''}}">
                        <input class="form-control" type="hidden" id="tblid" name="tblid" value="{{$productdata ? $productdata->id : ''}}">
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="name">Product Name:</label>
                       <input class="form-control " type="text" id="product_name" name="product_name"  value="{{$productdata ? $productdata->product_name : ''}}">
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="name">Product Number:</label>
                       <input class="form-control " type="text" id="product_number" name="product_number"  value="{{$productdata ? $productdata->product_number : ''}}">
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <label for="name">Product Rate:</label>
                       <input class="form-control " type="text" id="product_rate" name="product_rate"  value="{{$productdata ? $productdata->product_rate : ''}}">
                     </div>
                   </div>
                       <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Product Type</label>
                    <select class="form-control" name="product_type" id="product_type">
                      <option selected="" value="{{$productdata ? $productdata->product_type : ''}}">{{$productdata ? $productdata->product_type : ''}}</option>
                      <option >Select Product Type</option>
                        <option value="Featured Products">Featured Products</option>
                         <option value="New Products">New Products</option>
                    </select>
                </div>
            </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <label for="name">Product Descripation:</label>
                       <textarea class="form-control " type="text" id="product_dis" name="product_dis" rows="5">{{$productdata ? $productdata->product_dis : ''}}</textarea>
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