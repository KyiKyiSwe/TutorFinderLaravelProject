@extends('tutor.tutortemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
  
    <!-- main -->
   <div class="main-w3layouts wrapper my-5">
      <h1>Creative SignUp Form</h1>
      <div class="main-agileinfo">
         <div class="agileits-top">
            <form method="post" action="{{route('tutorprofile.store')}}" enctype="multipart/form-data">
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
                  <label>Name:</label>
                  <input type="text" name="name" value="{{Auth::user()->name}}">
                  
                </div>

                <div class="form-group">
                  <label>Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
                  <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                  @error('photo')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

                  <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" name="phone" class="form-control @error('subject') is-invalid @enderror" placeholder="Enter Phone number" value="{{old('phone')}}">
                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                   <div class="form-group">
                    <label>School Name:</label>
                    <input type="text" name="school" class="form-control @error('school') is-invalid @enderror" placeholder="Enter School Name" value="{{old('school')}}">
                    @error('school')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Qualification:</label>
                    <input type="text" name="qualification" class="form-control @error('qualification') is-invalid @enderror" placeholder="Enter qualification" value="{{old('qualification')}}">
                    @error('qualification')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address" value="{{old('address')}}">
                    @error('address')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

 

                  <div class="form-group">
                    <label>city:</label>
                    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Entercitys" value="{{old('city')}}">
                    @error('city')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                  <label>Level:</label>
                  <select name="level" class="form-control">
                    <optgroup label="Choose Subject">
                      @foreach($levels as $level)
                      <option value="{{$level->id}}">{{$level->name}}</option>
                      @endforeach
                    </optgroup>
                  </select>
                </div>

                <div class="form-group">
                  <label>Grade:</label>
                  <select name="grade" class="form-control">
                    <optgroup label="Choose Subject">
                      @foreach($grades as $grade)
                      <option value="{{$grade->id}}">{{$grade->name}}</option>
                      @endforeach
                    </optgroup>
                  </select>
                </div>


                  

                  <div class="form-group">
                        <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
                  </div>

                  

            </form> 
         </div>
      </div>   
   </div>


@endsection                






