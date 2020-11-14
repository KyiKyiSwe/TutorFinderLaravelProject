@extends('tutor.tutortemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
  
    <!-- main -->
	<div class="main-w3layouts wrapper my-5">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<div class="form-group">
		              <label>Name:</label>
		              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" value="{{old('name')}}">
		              @error('name')
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		                </span>
		              @enderror
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
		              <label>Email:</label>
		              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" value="{{old('email')}}">
		              @error('email')
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		                </span>
		              @enderror
		            </div>

		            <div class="form-group">
		              <label>PhoneNo:</label>
		              <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone no" value="{{old('phone')}}">
		              @error('phone')
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		                </span>
		              @enderror
		            </div>

		            <div class="form-group">
		              <label>SchoolName:</label>
		              <input type="text" name="school" class="form-control @error('school') is-invalid @enderror" placeholder="Enter school name" value="{{old('school')}}">
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
		              <label>City:</label>
		              <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Enter city" value="{{old('city')}}">
		              @error('city')
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		                </span>
		              @enderror
		            </div>

		            <div class="form-group">
		              <label>Level:</label>
		              <select name="level" class="form-control">
		                <optgroup label="Choose Level">
		                  {{-- @foreach($brands as $brand)
		                  <option value="{{$brand->id}}">{{$brand->name}}</option>
		                  @endforeach --}}
		                </optgroup>
		              </select>
		            </div>

		            <div class="form-group">
		              <label>Subject:</label>
		              <select name="subject" class="form-control">
		                <optgroup label="Choose Subject">
		                  {{-- @foreach($brands as $brand)
		                  <option value="{{$brand->id}}">{{$brand->name}}</option>
		                  @endforeach --}}
		                </optgroup>
		              </select>
		            </div>

		            <div class="form-group">
		                <label for="password">{{ __('Password') }}</label>

		                
		                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

		                @error('password')
		                    <span class="invalid-feedback" role="alert">
		                        <strong>{{ $message }}</strong>
		                    </span>
		                @enderror
		                
		            </div>

		            <div class="form-group">
		                <label for="password-confirm">{{ __('Confirm Password') }}</label>

		                
		                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
		                
		            </div>

		            <div class="form-group row mb-0">
		                <div class="col-md-6 offset-md-4">
		                    <button type="submit">
	                            {{ __('SIGNUP') }}
	                        </button>
		                </div>
		            </div>

		            
					
					{{-- <input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required=""> --}}
					
					{{-- <input type="submit" value="SIGNUP"> --}}
				</form>
				<p class="my-5">Don't have an Account? <a href="{{route('loginallpage')}}"> Login Now!</a></p>
			</div>
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->

@endsection