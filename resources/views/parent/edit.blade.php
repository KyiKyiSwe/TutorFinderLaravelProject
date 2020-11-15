@extends('parent.parenttemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
  
    <!-- main -->
	<div class="main-w3layouts wrapper my-5">
		<h3>Creative Parent Form</h3>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{route('userparent.update',$userparent->id)}}" method="post" 
				enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
		            <div class="form-group">
		              <label>Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>

		              <ul class="nav nav-tabs" id="myTab" role="tablist">
		                <li class="nav-item" role="presentation">
		                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#old" role="tab" aria-controls="home" aria-selected="true">Old</a>
		                </li>
		                <li class="nav-item" role="presentation">
		                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#new" role="tab" aria-controls="profile" aria-selected="false">New</a>
		                </li>
		              </ul>
		              <div class="tab-content mt-3" id="myTabContent">
		                <div class="tab-pane fade show active" id="old" role="tabpanel" aria-labelledby="home-tab">
		                  <img src="{{asset($userparent->photo)}}" class="img-fluid" alt="">
		                  <input type="hidden" name="oldphoto" value="{{$userparent->photo}}">
		                </div>
		                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="profile-tab">
		                  <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
		                  @error('photo')
		                    <span class="invalid-feedback" role="alert">
		                      <strong>{{ $message }}</strong>
		                    </span>
		                  @enderror
		                </div>
		              </div>
		            </div>

		            <div class="form-group">
		              <label>PhoneNo:</label>
		              <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone no" value="{{$userparent->phoneno}}">
		              @error('phone')
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		                </span>
		              @enderror
		            </div>

		            <div class="form-group">
		              <label>Address:</label>
		              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address" value="{{$userparent->address}}">
		              @error('address')
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		                </span>
		              @enderror
		            </div>

		            <div class="form-group">
		              <label>City:</label>
		              <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Enter city" value="{{$userparent->city}}">
		              @error('city')
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		                </span>
		              @enderror
		            </div>

		            <div class="form-group">
		              <label>User:</label>
		              <select name="user" class="form-control">
		                <optgroup label="Choose User">

		                  @foreach($users as $user)
		                   
		                   <option value="{{$user->id}}" @if($user->id == $userparent->user_id) 
		                   	{{'selected'}} @endif>{{$user->name}}</option>
		                  @endforeach
		         
		                </optgroup>
		              </select>
		            </div>

		            <div class="form-group">
		              <input type="submit" name="btnsubmit" value="Update" class="btn btn-success">
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