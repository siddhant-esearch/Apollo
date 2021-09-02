@include('admin.layouts.header')
<!-- Page content -->
<div class="container-fluid pt-8">
 <div class="page-header mt-0 shadow p-3">
  <ol class="breadcrumb mb-sm-0">
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"  aria-current="page">Edit Customer Questions</li>
  </ol>
  </div>
  <div class="row">
   <div class="col-md-12">
   <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Edit Customer Questions</h2>
                    <a href="{{url('/customer-questions')}}" class=" mb-0 waves-effect waves-light"><-Back</a>
                </div>

                <div class="card-body">
                <form action="{{url('/edit-customer-data')}}"  method="post" enctype="multipart/form-data">
          @csrf
                              <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label">Question</label>
                                    <input type="text" class="form-control" name="question" id="question"  value="{{$data->question}}">
                                    <input type="hidden" name="tblid" id="tblid" value="{{$data->id}}">                                   
                                </div>
                            </div>                              
                          
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Answer</label>
                                    <textarea class="form-control" rows="5" name="answer" id="answer">{{$data->answer}}</textarea>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group mb-0" style="margin-top: 70px;">
                                    <center><button class="btn btn-icon  btn-primary mt-1 mb-1 update_faq" type="Submit">
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
@include('admin.layouts.footer')

<script type="text/javascript">
  setTimeout(function(){$('#final_msg').fadeOut();}, 1000);
   setTimeout(function(){$('#idremove').fadeOut();}, 2000);
</script>

