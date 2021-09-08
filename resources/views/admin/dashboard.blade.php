@include('admin.layouts.header')
<!-- Page content -->
<div class="container-fluid pt-8">
 <div class="card shadow overflow-hidden">
  <div class="">
  <div class="row">
   <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
   <div class="text-center">
     <p class="text-light">
     <i class="fas fa-chart-line mr-2"></i>
     Total Appointments 
     </p>
    
     <h2 class="text-success text-xxl">0</h2>
     </div>
    </div>
    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
     <div class="text-center">
      <p class="text-light">
      <i class="fas fa-chart-line mr-2"></i>
     Today's Appointments
      </p>
    
      
      <h2 class="text-success text-xxl">0</h2>
      </div>
      </div>
      <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
         <div class="text-center">
         <p class="text-light">
         <i class="fas fa-chart-line mr-2"></i>
        Weekly Appointments
         </p>

         <h2 class="text-success text-xxl">0</h2>
      </div>
       </div>
    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
     <div class="text-center">
      <p class="text-light">
      <i class="fas fa-chart-line mr-2"></i>
     Monthly Appointments
      </p>
  
      <h2 class="text-success text-xxl">0</h2>
      </div>
    </div>
    </div>
    </div>
    </div>

 <div class="card shadow overflow-hidden">
  <div class="">
  <div class="row">
   <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
   <div class="text-center">
     <p class="text-light">
     <i class="fas fa-question-circle mr-2"></i>
     Total Enquiry 
     </p>
    @php
     use Carbon\Carbon; 
     $tenquiries = DB::table('customer_enquiries')->count();
     @endphp
     <h2 class="text-warning text-xxl">{{$tenquiries}}</h2>
     </div>
    </div>
    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
     <div class="text-center">
      <p class="text-light">
      <i class="fas fa-question-circle mr-2"></i>
     Today's Enquiry
      </p>
      @php
     $todayenquiries = DB::table('customer_enquiries')->whereDate('created_at', Carbon::today())->count();
     @endphp      
      <h2 class="text-warning text-xxl">{{$todayenquiries}}</h2>
      </div>
      </div>
      <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
         <div class="text-center">
         <p class="text-light">
         <i class="fas fa-question-circle mr-2"></i>
        Weekly Enquiry
         </p>
            @php
     $weekenquiries = DB::table('customer_enquiries')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
     @endphp  
         <h2 class="text-warning text-xxl">{{$weekenquiries}}</h2>
      </div>
       </div>
    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
     <div class="text-center">
      <p class="text-light">
      <i class="fas fa-question-circle mr-2"></i>
     Monthly Enquiry
      </p>
     @php
     $monthlyenquiries = DB::table('customer_enquiries')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
     @endphp 
      <h2 class="text-warning text-xxl">{{$monthlyenquiries}}</h2>
      </div>
    </div>
    </div>
    </div>
    </div>

 <div class="card shadow overflow-hidden">
  <div class="">
  <div class="row">
   <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
   <div class="text-center">
     <p class="text-light">
     <i class="fas fa-address-book mr-2"></i>
     Total Contact Query 
     </p>
      @php
     $tcontact = DB::table('contact_form_data')->count();
     @endphp
     <h2 class="text-danger text-xxl">{{$tcontact}}</h2>
     </div>
    </div>
    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
     <div class="text-center">
      <p class="text-light">
      <i class="fas fa-address-book mr-2"></i>
     Today's Contact Query
      </p>
       @php
     $todaycontact = DB::table('contact_form_data')->whereDate('created_at', Carbon::today())->count();
     @endphp  
      
      <h2 class="text-danger text-xxl">{{$todaycontact}}</h2>
      </div>
      </div>
      <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
         <div class="text-center">
         <p class="text-light">
         <i class="fas fa-address-book mr-2"></i>
        Weekly Contact Query
         </p>
      @php
     $weekecontact = DB::table('contact_form_data')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
     @endphp 
         <h2 class="text-danger text-xxl">{{$weekecontact}}</h2>
      </div>
       </div>
    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
     <div class="text-center">
      <p class="text-light">
      <i class="fas fa-address-book mr-2"></i>
     Monthly Contact Query
      </p>
      @php
     $monthlycontact = DB::table('contact_form_data')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
     @endphp 
      <h2 class="text-danger text-xxl">{{$monthlycontact}}</h2>
      </div>
    </div>
    </div>
    </div>
    </div>



 <div class="card shadow overflow-hidden">
  <div class="">
  <div class="row">
   <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
   <div class="text-center">
     <p class="text-light">
     <i class="fas fa-address-book mr-2"></i>
     Total Product Query 
     </p>
      @php
     $tcontact = DB::table('product_form_data')->count();
     @endphp
     <h2 class="text-defult text-xxl">{{$tcontact}}</h2>
     </div>
    </div>
    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
     <div class="text-center">
      <p class="text-light">
      <i class="fas fa-address-book mr-2"></i>
     Today's Product Query
      </p>
       @php
     $todaycontact = DB::table('product_form_data')->whereDate('created_at', Carbon::today())->count();
     @endphp  
      
      <h2 class="text-defult text-xxl">{{$todaycontact}}</h2>
      </div>
      </div>
      <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
         <div class="text-center">
         <p class="text-light">
         <i class="fas fa-address-book mr-2"></i>
        Weekly Product Query
         </p>
      @php
     $weekecontact = DB::table('product_form_data')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
     @endphp 
         <h2 class="text-defult text-xxl">{{$weekecontact}}</h2>
      </div>
       </div>
    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 stats">
     <div class="text-center">
      <p class="text-light">
      <i class="fas fa-address-book mr-2"></i>
     Monthly Product Query
      </p>
      @php
     $monthlycontact = DB::table('product_form_data')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
     @endphp 
      <h2 class="text-defult text-xxl">{{$monthlycontact}}</h2>
      </div>
    </div>
    </div>
    </div>
    </div>

</div>


 @include('admin.layouts.footer')