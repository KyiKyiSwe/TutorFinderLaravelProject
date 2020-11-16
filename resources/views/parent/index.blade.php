@extends('parent.parenttemplate')

@section('content')
    
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      {{-- <h2>We are team of talanted designers making websites with Bootstrap</h2> --}}
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        {{-- <div class="section-title">
          <h2>Your Profile</h2>
          <p>Profile</p>
        </div>
        <div class="row my-5">

          <div class="col-md-6">
            <img src="{{asset('frontend_asset/image/login.png')}}" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Daw Mya</h4>
                </div>
                <div class="card-body">
                    <p>Yangon</p>
                </div>
                <div class="card-footer">

                    {{-<a href="{{- {{route('userparent.edit',$userparents->id)}} --}} {{-- class="btn btn-success">Edit</a> 
                    <a href="" class="btn btn-success">Delete</a>        
                </div>
            </div>
          </div>
        </div> --}} 
    <!-- /.row -->
       {{--  <hr class="my-5"> --}}

        <div class="section-title my-3">
          <h2>Tutors</h2>
          <p>Our Tutors</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('frontend_asset/assets/img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  {{-- <a href=""><i class="icofont-linkedin"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('frontend_asset/assets/img/trainers/trainer-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  {{-- <a href=""><i class="icofont-linkedin"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('frontend_asset/assets/img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  {{-- <a href=""><i class="icofont-linkedin"></i></a> --}}
                </div>
              </div>
            </div>
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