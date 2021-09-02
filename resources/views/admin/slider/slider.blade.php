@include('admin.layouts.header')

<div class="container-fluid pt-8">

    <div class="page-header mt-0 shadow p-3">

        <ol class="breadcrumb mb-sm-0">

            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>

            <li class="breadcrumb-item active" aria-current="page">Slider</li>

        </ol>

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

<div class="row">

  <div class="col-md-12">

   <div class="card shadow">

    <div class="card-header">
<h2 class="mb-0">Slider</h2>
    

     <a href="{{url('add-slider')}}" class="btn btn-primary mb-0 waves-effect waves-light">Add Slider</a>

    </div>

     <div class="card-body">

       <div class="table-responsive">

       <table id="example" class="table table-striped table-bordered w-100 text-nowrap">

       <thead>
       <tr>
        <th  class="wd-15p">S.No.</th>
        <th>Heading</th>
        <th>Descripation</th>
        <th>Banner</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @if(!empty($data))

        <?php $i=1; ?>

        @foreach ($data as $udata)

        <tr>

         <td><?php  echo $i;?></td>

         <td style="white-space: break-spaces;">{{$udata->heading}}</td>

         <td style="white-space: break-spaces;">{{$udata->description}}</td>
         <td><img src="{{ url('/images/slider') }}/{{$udata->banner}}" style="width: 200px;height: 100px;">
          <br>
          <a href="{{url('/images/slider')}}/{{$udata->banner}}" target="_blank">View</a>
         </td>
         <td class="text-nowrap">

         <a class="btn btn-icon btn-pill btn-primary  mt-1 mb-1" style="width: 10px; height: 40px;" href="{{ url('/slider-edit')}}/{{$udata->id}}" type="button" title="Edit Slider">

         <span class="btn-inner--icon"><i class="fe fe-edit" style="color: #fff;margin-left: -8px;"></i></span>

         </a>

    

         <a class="btn btn-icon btn-pill btn-danger mt-1 mb-1" type="button" href="{{ url('/slider-delete') }}/{{$udata->id}}"   title="Delete Slider" style="width: 10px; height: 40px;" onclick="return confirm('Are you sure you want to Delete this Slider?');">

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



 