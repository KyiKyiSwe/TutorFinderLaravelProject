<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin_asset/img/apple-icon.png')}}">
      <link rel="icon" type="image/png" href="{{asset('admin_asset/img/favicon.png')}}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>
         Private Tutor Finder System
      </title>
      <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <!-- CSS Files -->
      <link href="{{asset('admin_asset/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="{{asset('admin_asset/demo/demo.css')}}" rel="stylesheet" />
   </head>
   <body class="">
      <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('admin_asset/img/sidebar-1.jpg')}}">
      
         <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
            </a>
         </div>
         <div class="sidebar-wrapper">
            <ul class="nav">
               <li class="nav-item  mx-3 px-5">
                  <a class="nav-link " href="./user.html">
                     <i class="material-icons fa-5x">person</i>
                    
                        @auth
          <li class=" dropdown px-5">
              <a id="{{-- navbarDropdown --}}" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" >
                  <a class="text-center" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                      @csrf
                  </form>
              </div>
          </li>
          @endauth
                     
                  </a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link {{Request::is('Backendadmin.viewtutorpage')?'active':''}}" href="{{route('viewtutorpage')}}">
                     <i class="material-icons">content_paste</i>
                     <p>Manage Tutor</p>
                  </a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link {{Request::is('Backendadmin.viewparent')?'active':''}}" href="{{route('viewparentpage')}}">
                     <i class="material-icons">bubble_chart</i>
                     <p>View Parents</p>
                  </a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link {{Request::is('Backendadmin.viewappointment')?'active':''}}" href="{{route('viewappointmentpage')}}">
                     <i class="material-icons">notifications</i>
                     <p>View Appointments</p>
                  </a>
               </li>

               

            </ul>
         </div>
      </div>


      <div class=" row main-panel ">

         <div class="row mt-5">
            @yield('content')
         </div>
      </div>
      <!--   Core JS Files   -->
      <script src="{{asset('admin_asset/js/core/jquery.min.js')}}"></script>
      <script src="{{asset('admin_asset/js/core/popper.min.js')}}"></script>
      <script src="{{asset('admin_asset/js/core/bootstrap-material-design.min.js')}}"></script>
      <script src="{{asset('admin_asset/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
      <!-- Plugin for the momentJs  -->
      <script src="{{asset('admin_asset/js/plugins/moment.min.js')}}"></script>
      <!--  Plugin for Sweet Alert -->
      <script src="{{asset('admin_asset/js/plugins/sweetalert2.js')}}"></script>
      <!-- Forms Validations Plugin -->
      <script src="{{asset('admin_asset/js/plugins/jquery.validate.min.js')}}"></script>
      <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
      <script src="{{asset('admin_asset/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
      <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
      <script src="{{asset('admin_asset/js/plugins/bootstrap-selectpicker.js')}}"></script>
      <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
      <script src="{{asset('admin_asset/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
      <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
      <script src="{{asset('admin_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
      <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
      <script src="{{asset('admin_asset/js/plugins/bootstrap-tagsinput.js')}}"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
      <script src="{{asset('admin_asset/js/plugins/jasny-bootstrap.min.js')}}"></script>
      <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
      <script src="{{asset('admin_asset/js/plugins/fullcalendar.min.js')}}"></script>
      <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
      <script src="{{asset('admin_asset/js/plugins/jquery-jvectormap.js')}}"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="{{asset('admin_asset/js/plugins/nouislider.min.js')}}"></script>
      <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
      <!-- Library for adding dinamically elements -->
      <script src="{{asset('admin_asset/js/plugins/arrive.min.js')}}"></script>
      <!--  Google Maps Plugin    -->
      {{--  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
      <!-- Chartist JS -->
      {{-- <script src="{{asset('admin_asset/js/plugins/chartist.min.js')}}"></script> --}}
      <!--  Notifications Plugin    -->
      <script src="{{asset('admin_asset/js/plugins/bootstrap-notify.js')}}"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="{{asset('admin_asset/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
      <!-- Material Dashboard DEMO methods, don't include it in your project! -->
   </body>
</html>