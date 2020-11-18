@extends('frontend.frontendtemplate')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
   <div class="container">
      <h2>About Us</h2>
      <p>We have tutors in many Subjects in Mandalay. Tutoring is a great way for students to get their questions answered and improve their grades. Tutors work at your pace and tailor their teaching to meet your learning needs.
      </p>
   </div>
</div>
<!-- End Breadcrumbs -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
   <div class="container" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('frontend_asset/assets/img/about.jpg')}}" class="img-fluid" alt="">
         </div>
         <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3> Tutor Finder can put you in touch with qualifid tutors.</h3>
            <p class="font-italic">
               We can put you in touch with the following grades.
            </p>
            <ul>
               <li><i class="icofont-check-circled"></i> Grade-1 to Grade -4  (Myanmar, English, Maths, Science)</li>
               <li><i class="icofont-check-circled"></i> Grade-5 to Grade-8 (Myanmar, English, Maths, Science, History, Geography)</li>
               <li><i class="icofont-check-circled"></i> Grade-9 to Grade-10 (Myanmar, English, Maths, Physics, Biology, Chemistry)</li>
            </ul>
            <p>
               Access the one-on-one tuition you need to build confidence and be successful.
            </p>
         </div>
      </div>
   </div>
</section>
<!-- End About Section -->
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
   <div class="container">
      <div class="row counters">
         <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">135</span>
            <p>Students</p>
         </div>
         <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">50</span>
            <p>Parents</p>
         </div>
         <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">30</span>
            <p>Tutors</p>
         </div>
      </div>
   </div>
</section>
<!-- End Counts Section -->
@endsection