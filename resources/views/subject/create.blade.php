@extends('tutor.tutortemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
  
    <!-- main -->
   <div class="main-w3layouts wrapper my-5">
      <h1>Creative SignUp Form</h1>
      <div class="main-agileinfo">
         <div class="agileits-top">
            <form method="post" action="{{route('subject.store')}}" enctype="multipart/form-data">
               @csrf

                  {{-- <div class="form-group">
                    <label>Grade:</label>
                    <input type="text" name="grade" class="form-control @error('grade') is-invalid @enderror" placeholder="Enter grade" value="{{old('grade')}}">
                    @error('grade')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div> --}}

                  <div class="form-group">
                    <label>Subject:</label>
                    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Enter subject" value="{{old('subject')}}">
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

                   


                  <div class="form-group">
                    <label>Course: (<small class="text-danger">* pdf</small>)</label>
                    <input type="file" name="course" class="form-control-file @error('course') is-invalid @enderror">
                    @error('course')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label>Hours:</label>
                    <input type="text" name="hours" class="form-control @error('hours') is-invalid @enderror" placeholder="Enter hours" value="{{old('hours')}}">
                    @error('address')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  

                  <div class="form-group">
                        <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
                     </div>
            </form>
            
         </div>
      </div>   
   </div>


@endsection