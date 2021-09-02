@include('admin.layouts.header')
<!-- Page content -->
<div class="container-fluid pt-8">
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"  aria-current="page">Add Product Details</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
             <div class="card-header">
                <div class="row">
                 <div class="col-md-12">
                     <a href="{{url('/list-products')}}" class=" mb-0 waves-effect waves-light"><i class="angle fa fa-angle-left"></i> Back</a>
                 </div>
                 <div class="col-md-12">
                    <h2>Add Product Details</h2>
                </div>
          </div>
        </div>
        <div class="card-body">
         <form action="{{url('/add-product-details-data')}}"  method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Discount Rate</label>
                    <input type="text" class="form-control" name="discount_rate" id="discount_rate" autocomplete="off" required="">
                    <input type="hidden" name="tblid" id="tblid" value="{{$id}}">
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Save %</label>
                    <input type="text" class="form-control" name="save_percentage" id="save_percentage" autocomplete="off" required="">
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Product Page Banner</label>
                    <input type="file" class="form-control" name="product_page_banner" id="product_page_banner" required="">
                </div>
            </div>
       <div class="col-md-12">
                <div class="form-group mb-0">
                    <label class="form-label">Short Details</label>
                    <textarea class="form-control" rows="2" name="short_details" id="short_details" required=""></textarea>
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group mb-0">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="5" name="description" id="description" required=""></textarea>
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group mb-0">
                    <label class="form-label">Product Details</label>
                    <textarea class="form-control" rows="5" name="product_details" id="product_details" required=""></textarea>
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group mb-0">
                    <label class="form-label">Reviews</label>
                    <textarea class="form-control" rows="5" name="reviews" id="reviews" required=""></textarea>
                </div>
            </div>
            
                 <div class="col-md-6">
                <div class="form-group mb-0">
                    <label class="form-label">Tag1</label>
                    <textarea class="form-control" rows="3" name="tag1" id="tag1" required=""></textarea>
                </div>
            </div>
                 <div class="col-md-6">
                <div class="form-group mb-0">
                    <label class="form-label">Tag2</label>
                    <textarea class="form-control" rows="3" name="tag2" id="tag2" required=""></textarea>
                </div>
            </div>
                 <div class="col-md-6">
                <div class="form-group mb-0">
                    <label class="form-label">Tag3</label>
                    <textarea class="form-control" rows="3" name="tag3" id="tag3" required=""></textarea>
                </div>
            </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Tag Banner</label>
                    <input type="file" class="form-control" name="banner_tags" id="banner_tags" required="">
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Width</label>
                    <input type="number" class="form-control" name="width" id="width" autocomplete="off" required="">
                </div>
            </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Aspect Ratio</label>
                    <input type="number" class="form-control" name="aspect_ratio" id="aspect_ratio" autocomplete="off" required="">
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Rim Diameter</label>
                    <input type="number" class="form-control" name="rim_diameter" id="rim_diameter" autocomplete="off" required="">
                </div>
            </div>
               <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Tube Type</label>
                    <input type="text" class="form-control" name="tube_type" id="tube_type" autocomplete="off" required="">
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
