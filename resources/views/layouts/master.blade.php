<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Kalkulator Online</title>

  <script src="dashboard/assets/js/pace.min.js"></script>
  <link href="dashboard/assets/css/pace.min.css" rel="stylesheet"/>
  <link href="dashboard/assets/images/logo.png" type="image/x-icon" rel="icon" >
  <link href="dashboard/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="dashboard/assets/css/bootstrap.css" rel="stylesheet"/>
  <link href="dashboard/assets/css/responsive.bootstrap.min.css" rel="stylesheet"/>  
  <link href="dashboard/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="dashboard/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <link href="dashboard/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <link href="dashboard/assets/css/app-style.css" rel="stylesheet"/>
  
  <!-- <link href="dashboard/assets/css/common.css" rel="stylesheet"/> -->
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="modal/fonts/icomoon/style.css">
  <link rel="stylesheet" href="modal/css/style.css">

  <script src="https://kit.fontawesome.com/2c4a3214dd.js" crossorigin="anonymous"></script>
</head>

<body class="bg-theme bg-theme2" id="body">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <!-- <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      @if(Auth::user()->role != 4) 
      <a href="/index">
        <img src="dashboard/assets/images/logo.png" class="brand-logo" alt="brand-logo">
      </a>
      @endif
      @if(Auth::user()->role == 4)
      <a href="/kalkulator">
        <img src="dashboard/assets/images/logo.png" class="brand-logo" alt="brand-logo">
      </a>
      @endif
   </div>
   <ul class="sidebar-menu do-nicescrol" id="sidebarMenu">
     <br>
     <li>
        <a href="/kalkulator">
          <i class="zmdi zmdi-grid"></i> <span>KALKULATOR ONLINE</span>
        </a>
      </li>
      @if(Auth::user()->role == 1)
     <li>
        <a href="/kalkulator2">
          <i class="zmdi zmdi-grid"></i> <span>KALKULATOR STAGING</span>
        </a>
      </li>
      @endif
     @if(Auth::user()->role != 4)
     <li>
       <a href="/model">
       
         <i class="zmdi zmdi-car"></i> <span>MODEL</span>
       </a>
     </li>

      <li>
        <a href="/brand">
          <i class="far fa-copyright"></i><span>BRAND</span>
        </a>
      </li>


      <li>
        <a href="/incentiveRate">
          <i class="fas fa-percent"></i><span>INCENTIVE RATE</span>
        </a>
      </li>

      <li>
        <a href="/otr">
          <i class="fas fa-hand-holding-usd"></i> <span>OTR</span>
        </a>
      </li>
      
      @if(Auth::user()->role != 3)
      <li>
        <a href="/user">
        
          <i class="fas fa-user-astronaut"></i></i> <span>USER MANAGEMENT</span>
        </a>
      </li>
      @endif
      @endif
    </ul>
   
   </div> -->
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav" id="top-menu">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <div id="button-sidebar">
        <a class="nav-link toggle-menu" href="javascript:void();">
         <i class="icon-menu menu-icon"></i>
        </a>
      </div>
    </li>
    <!-- <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li> -->
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="dashboard/assets/images/avatar-icon.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <!-- <a href="#"> -->
            <div class="media">
              <div class="avatar">
                <img class="align-self-start mr-3" src="dashboard/assets/images/avatar-icon.png" alt="user avatar">
              </div>
              <div class="media-body">
                <h6 class="mt-2 user-title">{{auth()->user()->username}}</h6>
              </div>
            </div>
        <!-- </a> -->
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="/profile"><i class="fas fa-sync-alt mr-3"></i>Ubah Password</a></li>
        <li class="dropdown-divider"></li>
        @if(Auth::user()->role != 4)
        <li class="dropdown-item"><a href="/index"><i class="icon-rotate-left mr-3"></i>Back to Menu</a></li>
        @endif
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="/logout"><i class="icon-power-off mr-3"></i>Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper" id="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
  @yield('content')
  <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright (OW) © PT. Sunindo KB Finance
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Theme</p>
      <br>
      <ul class="switcher">
        <li id="theme2"></li>
        <!-- <li id="theme1"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li> -->
      </ul>
<!-- 
      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        
        <<li id="theme8"></li>
        
		    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
-->
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="dashboard/assets/js/jquery.min.js"></script>
  <script src="dashboard/assets/js/popper.min.js"></script>
  <script src="dashboard/assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="dashboard/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-dashboard/menu js -->
  <script src="dashboard/assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="dashboard/assets/js/app-script.js"></script>
  <!-- Chart js 
  <script src="dashboard/assets/plugins/Chart.js/Chart.min.js"></script>
  -->
  <!-- Index js 
  <script src="dashboard/assets/js/index.js"></script>
  -->

  <!-- DataTables-->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script> -->

  @include('sweetalert::alert')

</body>
</html>
