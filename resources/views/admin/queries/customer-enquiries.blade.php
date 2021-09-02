@include('admin.layouts.header')

<div class="container-fluid pt-8">
 <div class="page-header mt-0 shadow p-3">
<ol class="breadcrumb mb-sm-0">
 <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
 <li class="breadcrumb-item active" aria-current="page">Customer Enquiries</li>
</ol>
</div>
<div class="row">
  <div class="col-md-12">
   <div class="card shadow">
    <div class="card-header">
       <h2 class="mb-0">Customer Enquiries</h2>
     </div>
     <div class="card-body">
      <div class="table-responsive">
       <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
       <thead>
       <tr>
        <th  class="wd-15p">S.No.</th>
        <th class="wd-15p">Name</th>
        <th class="wd-15p">Email</th>
        <th  class="wd-15p">Subject</th>
        <th  class="wd-15p">Message</th>
         <th  class="wd-15p">Date & Time</th>
       </tr>
        </thead>
        <tbody>
        @if(!empty($data))
        <?php $i=1; ?>
        @foreach ($data as $udata)
        <tr>
        <td><?php  echo $i;?></td>
         <td style="white-space: break-spaces; word-wrap:break-word;"  class="text-sm font-weight-600">{{$udata->customer_name}}</td>
         <td style="white-space: break-spaces; word-wrap:break-word;">{{$udata->customer_email}}</td>
         <td style="white-space: break-spaces; word-wrap:break-word;">{{$udata->subject}}</td>
         <td style="white-space: break-spaces; word-wrap:break-word;">{{$udata->message}}</td>
          <td style="white-space: break-spaces; word-wrap:break-word;">{{$udata->created_at}}</td>
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
   </script>



