@extends('parent.parenttemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
  
    <!-- main -->
	<div class="main-w3layouts wrapper my-5">
		<h3>Hello! Mrs.Julia</h3>
		<h5>Please choose the following data</h5>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">

		            <div class="form-group">
		              <label>Grade:</label>
		              <select name="grade" class="form-control">
		                <optgroup label="Choose Grade">
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

		            <div class="form-group row py-5">
		                <div class="col-lg-6 col-md-6 col-sm-6 ">
		                    <a href="" class="btn btn-success">
		                       Continue
		                    </a>
		                </div>
		                <div class="col-lg-6 col-md-6 col-sm-6">
		                    <a href="{{route('userparent.index')}}" class="btn btn-success">
		                    	Back
		                    </a>
		                </div>
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