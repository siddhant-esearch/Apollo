<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <meta content="Inspired Elite Soluation." name="description">
  <meta content="Spruko" name="author">
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <!-- Title -->
  <title>Apollo Tyers</title>
  <!--Select2 css-->
  <link rel="stylesheet" href="{{ url('/assets') }}/plugins/select2/select2.css">
  <!-- Favicon -->
  <link href="{{ url('/webassets') }}/images/favicon.ico" rel="icon" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

  <!-- Icons -->
  <link href="{{ url('/assets') }}/css/icons.css" rel="stylesheet">

  <!--Bootstrap.min css-->
  <link rel="stylesheet" href="{{ url('/assets') }}/plugins/bootstrap/css/bootstrap.min.css">

  <!-- Ansta CSS -->
  <link href="{{ url('/assets') }}/css/dashboard.css" rel="stylesheet" type="text/css">

  <!-- Tabs CSS -->
  <link href="{{ url('/assets') }}/plugins/tabs/style.css" rel="stylesheet" type="text/css">
  <!-- Data table css -->
  <link href="{{ url('/assets') }}/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

  <!-- jvectormap CSS -->
  <link href="{{ url('/assets') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

  <!-- Custom scroll bar css-->
  <link href="{{ url('/assets') }}/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

  <!-- Sidemenu Css -->
  <link href="{{ url('/assets') }}/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

</head>
<body class="app sidebar-mini rtl" >
  <div id="global-loader" ></div>
  <div class="page">
    <div class="page-main">
      <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar ">
        <div class="sidebar-img pd-90">
          <a class="navbar-brand" href="{{ url('/home') }}"><img alt="..." class="navbar-brand-img main-logo" src="{{ url('/webassets') }}/images/logo2.png"> <img alt="..." class="navbar-brand-img logo" src="{{ url('/webassets') }}/images/logo2.png"></a>
          <ul class="side-menu">
            <li class="slide">
              <a class="side-menu__item active"  href="{{ url('/home') }}">
                <i class="side-menu__icon fe fe-home"></i>
                <span class="side-menu__label">Dashboard</span>
                <i class="angle fa fa-angle-right"></i>
              </a>
            </li>
      
                <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-list"></i><span class="side-menu__label">Content Management</span><i class="angle fa fa-angle-right"></i></a>
              <ul class="slide-menu">
                   <li>
                  <a href="{{ url('/slider') }}" class="slide-item">Sliders</a>
                </li>
                  <li>
                  <a href="{{ url('/contactus') }}" class="slide-item">Contact us</a>
                </li>
                  <li>
                  <a href="{{ url('/aboutus') }}" class="slide-item">Aboutus</a>
                </li>
                <li>
                  <a href="{{ url('/indexdata') }}" class="slide-item">Index Data</a>
                </li>
                  <li>
                  <a href="{{ url('/faq') }}" class="slide-item">FAQ</a>
                </li>
                <li>
                  <a href="{{ url('/amdgallery') }}" class="slide-item">Gallery</a>
                </li>
                 
                 
              </ul>
            </li>
            <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-list-alt"></i><span class="side-menu__label">Services Management</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
               <li>
                  <a href="{{ url('/list-services') }}" class="slide-item">List Service</a>
                </li>
                 <li>
                  <a href="{{ url('/customer-questions') }}" class="slide-item">Customer Questions</a>
               </li>       
           </ul>
           </li>
           <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-list-alt"></i><span class="side-menu__label">Product Management</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
               <li>
                  <a href="{{ url('/list-products') }}" class="slide-item">List Product</a>
                </li>           
           </ul>
           </li>
           <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-list-alt"></i><span class="side-menu__label">Tyer Management</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
               <li>
                  <a href="{{ url('/list-tyers') }}" class="slide-item">List Tyers</a>
                </li>           
           </ul>
           </li>
             <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-question-circle"></i><span class="side-menu__label">Query Management</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
               <li>
                  <a href="{{ url('/customer-queries') }}" class="slide-item">Customer Queries</a>
                </li>  
                 <li>
                  <a href="{{ url('/product-page-queries') }}" class="slide-item">Product Page Queries</a>
                </li> 
                 <li>
                  <a href="{{ url('/customer-enquiries') }}" class="slide-item">Customer Enquiries</a>
                </li>           
           </ul>
           </li>
          </div>
          </aside>
          <!-- Sidebar menu-->

          <!-- app-content-->
          <div class="app-content ">
            <div class="side-app">
              <div class="main-content">
                <div class="p-2 d-block d-sm-none navbar-sm-search">
                  <!-- Form -->
                  <form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
                    <div class="form-group mb-0">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div><input class="form-control" placeholder="Search" type="text">
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Top navbar -->
                <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
                  <div class="container-fluid">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>

                    <!-- Horizontal Navbar -->
                    

                    <!-- Brand -->
                    <a class="navbar-brand pt-0 d-md-none" href="index-2.html">
                      <img src="/assets/img/brand/logo-light.png" class="navbar-brand-img" alt="...">
                    </a>
                    <!-- Form -->
                <!--     <form class="navbar-search navbar-search-dark form-inline mr-3 ml-lg-auto">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                          </div><input class="form-control" placeholder="Search" type="text">
                        </div>
                      </div>
                    </form> -->
                    <!-- User -->
                    <ul class="navbar-nav align-items-center ">
                      <li class="nav-item d-none d-md-flex">
                        <div class="dropdown d-none d-md-flex mt-2 ">
                          <a class="nav-link full-screen-link pl-0 pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
                        </div>
                      </li>
                      
                      
                      
                      <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="#" role="button">
                          <div class="media align-items-center">
                            @if(Auth::user()->profile_picture_status == 0)
                            <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="{{ url('/user_picture') }}/images.png"></span>
                            @else
                            <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="{{ url('/user_picture') }}/{{Auth::user()->profile_picture}}"></span>
                            @endif
                            <div class="media-body ml-2 d-none d-lg-block">
                              <span class="mb-0 "> {{ Auth::user()->name }}</span>
                            </div>
                          </div></a>
                          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                              <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a class="dropdown-item" href="{{ url('/profile') }}"><i class="ni ni-single-02"></i> <span>My profile</span></a>
                            <div class="dropdown-divider"></div>
                            <a  class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="ni ni-user-run"></i> <span>Logout</span></a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
                  <!-- Top navbar-->


                  