@extends('parent.parenttemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
  
    <!-- main -->
	<div class="main-w3layouts wrapper my-5">
		<h3>Creative Parent Form</h3>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{route('userparent.store')}}" method="post" 
				enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
		              <label>Name:</label>
		              <input type="text" name="name" value="{{Auth::user()->name}}">
		              {{-- <select name="user" class="form-control">
		                <optgroup label="Choose User">

		                  @foreach($users as $user)
		                   <option value="{{$user->id}}">{{$user->name}}</option>
		                  @endforeach
		         
		                </optgroup>
		              </select> --}}
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
		              <label>PhoneNo:</label>
		              <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone no" value="{{old('phone')}}">
		              @error('phone')
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
		              <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
		            </div>

				</form>
				
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