@extends('frontend.frontendtemplate')

@section('content')
  
    <div class="container">
    	
    	<div class="row my-5 py-5">
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			
    		</div>
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			<img src="{{asset('frontend_asset/image/login.png')}}" class="img-fluid">
    		</div>
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			
    		</div>
    		
    	</div>

    	<div class="row my-5 py-5">
    		<div class=" col-lg-4 col-md-4 col-sm-4">
    			<a href="{{route('loginallpage')}}" class="btn btn-outline-success">Login As Admin</a>
    		</div>
    		<div class=" col-lg-4 col-md-4 col-sm-4">
    			<a href="{{route('loginallpage')}}" class="btn btn-outline-success">Login As Tutor</a>
    		</div>
    		<div class=" col-lg-4 col-md-4 col-sm-4">
    			<a href="{{route('loginallpage')}}" class="btn btn-outline-success">Login As Parent</a>
    		</div>
    		
    	</div>
    </div>
@endsection