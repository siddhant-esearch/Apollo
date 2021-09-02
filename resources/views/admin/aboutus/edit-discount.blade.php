@include('admin.layouts.header')
<div class="container-fluid pt-8">
	<div class="page-header mt-0 shadow p-3">
		<ol class="breadcrumb mb-sm-0">
			<li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
			<li class="breadcrumb-item active"  aria-current="page">Edit Discount</li>
		</ol>
		@if(session()->has('message'))
		<div class="alert alert-success" id="final_msg" role="alert">
			<strong>Success!</strong>  {{ session()->get('message') }}
		</div>
		@endif
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow">
				<div class="card-header">
					<div class="row">
						<div class="col-md-12">
							<h2 class="mb-0">Edit Discount</h2>
							 <a href="{{url('/indexdata')}}" class=" mb-0 waves-effect waves-light"><i class="angle fa fa-angle-left"></i> Back</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ url('/update-discount') }}" method="post"  enctype="multipart/form-data">
						@csrf
						<div class="row">
     					<div class="col-md-6">
								<div class="form-group" >
									<label class="form-label">Images</label>
									<input type="file" class="form-control" name="discount_image" id="discount_image" value="{{$discountdata ? $discountdata->discount_image : ''}}">
									<input type="hidden" name="tblid" id="tblid" value="{{$discountdata ? $discountdata->id : ''}}">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group" >
									<label class="form-label">Discount For</label>
									<input type="text" class="form-control" name="discount_for" id="discount_for" value="{{$discountdata ? $discountdata->discount_for : ''}}">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group" >
									<label class="form-label">Discount</label>
									<input type="text" class="form-control" name="discount" id="discount" value="{{$discountdata ? $discountdata->discount : ''}}">
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



<!-- section-1 close -->
@include('admin.layouts.footer')

<script>
 setTimeout(function(){$('#final_msg').fadeOut();}, 3000);
</script>