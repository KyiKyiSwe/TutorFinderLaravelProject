@extends('tutor.tutortemplate')

@section('content')
    
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <div class="container">
      <h4 class="text-center text-success my-3">Welcome our beloved tutors!</h3>
      <h5 class="text-center text-success my-3">A teacher is one who helps others and influences lives forever.</h4>
      <div class="row py-5">
      <div class="col-sm-12 col-md-4 px-2">
          <img src="{{asset('newphoto/p1.png')}}" class="img-responsive " style="width: 350px;">
      </div>
      <div class="col-sm-12 col-md-4 px-2">
          <img src="{{asset('newphoto/p2.png')}}" class="img-responsive " style="width: 350px;">
      </div>
      <div class="col-sm-12 col-md-4 px-2">
          <img src="{{asset('newphoto/p3.png')}}" class="img-responsive " style="width: 350px;">
      </div>
      <div class="col-sm-12 col-md-4 px-2 my-3">
          <img src="{{asset('newphoto/p4.png')}}" class="img-responsive " style="width: 350px;">
      </div>
      <div class="col-sm-12 col-md-4 px-2 my-3">
          <img src="{{asset('newphoto/p5.png')}}" class="img-responsive " style="width: 350px;">
      </div>
      <div class="col-sm-12 col-md-4 px-2 my-3">
          <img src="{{asset('newphoto/p6.png')}}" class="img-responsive " style="width: 350px;">
      </div>
      
    </div>
    </div>

    
    </section><!-- End Trainers Section -->

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
    </section><!-- End Counts Section -->
    
  </main><!-- End #main -->
  

@endsection