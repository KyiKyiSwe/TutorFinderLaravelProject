@extends('tutor.tutortemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
  
    <!-- main -->
   <div class="main-w3layouts wrapper my-5">
      <h1>Creative SignUp Form</h1>
      <div class="main-agileinfo">
         <div class="agileits-top">
            <form method="post" action="{{route('subject.update',$subject->id)}}" enctype="multipart/form-data">
               @csrf
               @method('PUT')

                  <div class="form-group">
                    <label>Subject:</label>
                    <input type="text" name="name" class="form-control @error('subject') is-invalid @enderror" placeholder="Enter subject" value="{{old('name')}}">
                    @error('subject')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                   <div class="form-group">
                    <label>Fee:</label>
                    <input type="number" name="fee" class="form-control @error('fee') is-invalid @enderror" placeholder="Enter fee" value="{{old('fee')}}">
                    @error('fee')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  {{-- <div class="form-group">
                    <label>Course: (<small class="text-danger">* pdf|txt|doc</small>)</label>
                    <input type="file" name="course" class="form-control-file @error('course') is-invalid @enderror">
                    @error('course')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div> --}}
                  <div class="form-group">
            
               <label>Course: (<small class="text-danger">* pdf|txt|doc</small>)</label>
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New</a>
                  </li>
               </ul>
               <div class="tab-content mt-3" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <img src="{{asset($subject->course)}}" class="img-fluid" alt="">
                     <input type="hidden" name="oldcourse" value="{{$subject->course}}">
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <input type="file" name="course" class="form-control-file @error('course') is-invalid @enderror">
                     @error('course')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
            </div>

                  <div class="form-group">
                    <label>Hours:</label>
                    <input type="text" name="hours" class="form-control @error('hours') is-invalid @enderror" placeholder="Enter hours" value="{{old('hours')}}">
                    @error('hours')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  

                  <div class="form-group">
                        <input type="submit" name="btnsubmit" value="Update" class="btn btn-success">
                     </div>
            </form>
            
         </div>
      </div>   
   </div>


@endsection