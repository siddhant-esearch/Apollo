@include('admin.layouts.header')
<!-- Page content -->
<div class="container-fluid pt-8">
   <div class="page-header mt-0 shadow p-3">
   <ol class="breadcrumb mb-sm-0">
     <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
     <li class="breadcrumb-item active"  aria-current="page">Edit Slider</li>
   </ol>

   </div>
   <div class="row">
     <div class="col-md-12">
     <div class="card shadow">
     <div class="card-header">
     <h2 class="mb-0">Edit Slider</h2>
      <a href="{{url('/slider')}}" class=" mb-0 waves-effect waves-light"><-Back</a>
     </div>
     <div class="card-body">
        <form action="{{ url('/update-slider-details') }}" method="post" name="form1"  onsubmit="return validateForm()"  enctype="multipart/form-data">
  @csrf
     <div class="row">
     <div class="col-md-6">
     <div class="form-group">
     <label class="form-label">Heading<span id="display_count1" style="margin-left: 10px;">0</span>/<span id="word_left1">10</span>(<span style="color: red">Only 10 words accept</span>)</label>
     <input type="text" class="form-control" name="heading" id="heading" value="{{$data->heading}}">
     </div>
     </div>
      <div class="col-md-6">
     <div class="form-group">
     <label class="form-label">Upload Banner</label>
     <input type="file" class="form-control" name="banner" id="banner" value="{{$data->banner}}">
     <input type="hidden" name="tblid" id="tblid" value="{{$data->id}}">
     </div>
     </div>
     <div class="col-md-12">
     <div class="form-group mb-0">
     <label class="form-label">Description<span id="display_count" style="margin-left: 10px;">0</span>/<span id="word_left">25</span>(<span style="color: red">Only 25 words accept</span>)</label>
     <textarea class="form-control" rows="5" name="description" id="description">{{$data->description}}</textarea>
     </div>
     </div>
     <div class="col-md-12">
     <div class="form-group mb-0" style="margin-top: 70px;">
     <center><button class="btn btn-icon  btn-primary mt-1 mb-1 add_policy" type="Submit">
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
  function validateForm() {
var heading = document.forms["form1"]["heading"].value;
var description = document.forms["form1"]["description"].value;

 if (heading == "") {
  jQuery('#heading').after('<p id="idremove" style="color:red;height: 8px;">Please Enter Heading</p>');
  return false;
 }
 if (description == "") {
  jQuery('#description').after('<p id="idremove" style="color:red;height: 8px;">Please Enter Description</p>');
  return false;
}

}
   setTimeout(function(){$('#idremove').fadeOut();}, 3000);
</script>


<script type="text/javascript">
  $(document).ready(function() {
  $("#heading").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 10) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 10).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#display_count1').text(words);
      $('#word_left1').text(10-words);
    }
  });
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
  $("#description").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 25) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 25).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#display_count').text(words);
      $('#word_left').text(25-words);
    }
  });
});
</script>