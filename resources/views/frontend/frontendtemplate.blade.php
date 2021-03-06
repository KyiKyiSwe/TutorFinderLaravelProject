<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Online Private Tutor Finder</title>
      <meta content="" name="descriptison">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="{{asset('frontend_asset/assets/img/favicon.png')}}" rel="icon">
      <link href="{{asset('frontend_asset/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="{{asset('frontend_asset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('frontend_asset/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
      <link href="{{asset('frontend_asset/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('frontend_asset/assets/vendor/remixicon/remixicon.cs')}}s" rel="stylesheet">
      <link href="{{asset('frontend_asset/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
      <link href="{{asset('frontend_asset/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
      <link href="{{asset('frontend_asset/assets/vendor/aos/aos.css')}}" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="{{asset('frontend_asset/assets/css/style.css')}}" rel="stylesheet">
      <!-- =======================================================
         * Template Name: Mentor - v2.1.0
         * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top">
         <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto"><a href="index.html">Tutor Finder System</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav class="nav-menu d-none d-lg-block">
               <ul>
                  <li class="nav-item {{ (Route::currentRouteName()=='frontendpage')  ? 'active' : '' }}">
                     <a class="nav-link" href="{{route('frontendpage')}}">Home</a>
                  </li>
                  <li class="nav-item {{ (Route::currentRouteName()=='aboutpage')  ? 'active' : '' }}">
                     <a class="nav-link" href="{{route('aboutpage')}}">About</a>
                  </li>
                  @auth
                  <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </div>
                  </li>
                  @else
                  <li class="nav-item {{ (Route::currentRouteName()=='loginuserpage')  ? 'active' : '' }}">
                     <a class="nav-link" href="{{route('loginuserpage')}}">Login</a>
                  </li>
                  <li class="nav-item {{ (Route::currentRouteName()=='registerpage')  ? 'active' : '' }}">
                     <a class="nav-link" href="{{route('registerpage')}}">Register</a>
                  </li>
                  @endauth
                  </li>
                  <li class="nav-item {{ (Route::currentRouteName()=='contactpage')  ? 'active' : '' }}">
                     <a class="nav-link" href="{{route('contactpage')}}">Contact</a>
                  </li>
               </ul>
            </nav>
            <!-- .nav-menu -->
         </div>
      </header>
      <!-- End Header -->
      @yield('content')
      <!-- ======= Footer ======= -->
      <footer id="footer">
         <div class="container d-md-flex py-4">
            <div class="mr-md-auto text-center text-md-left">
               <div class="copyright">
                  &copy; Copyright <strong><span>Online Private Tutor Finder System Team</span></strong>. All Rights Reserved
               </div>
               <div class="credits">
                  Designed by K&P
               </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
               <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
               <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
               <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
         </div>
      </footer>
      <!-- End Footer -->
      <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
      <div id="preloader"></div>
      <!-- Vendor JS Files -->
      <script src="{{asset('frontend_asset/assets/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('frontend_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend_asset/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
      <script src="{{asset('frontend_asset/assets/vendor/php-email-form/validate.js')}}"></script>
      <script src="{{asset('frontend_asset/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('frontend_asset/assets/vendor/counterup/counterup.min.js')}}"></script>
      <script src="{{asset('frontend_asset/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('frontend_asset/assets/vendor/aos/aos.js')}}"></script>
      <!-- Template Main JS File -->
      <script src="{{asset('frontend_asset/assets/js/main.js')}}"></script>
   </body>
</html>