@extends('frontend.frontendtemplate')

@section('content')
  
    <div class="container">
    	
    	<div class="row my-5 py-5">
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			
    		</div>
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			<img src="{{asset('frontend_asset/image/Register.jpg')}}" class="img-fluid">
    		</div>
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			
    		</div>
    		
    	</div>

    	<div class="row my-5 py-5">
    		<div class=" col-lg-3 col-md-3 col-sm-3">
    			
    		</div>
    		<div class=" col-lg-3 col-md-3 col-sm-3">
    			<a href="{{route('tutorregister')}}" class="btn btn-outline-success">Signup As Tutor</a>
    		</div>
    		<div class=" col-lg-3 col-md-3 col-sm-3">
    			<a href="{{route('parentregister')}}" class="btn btn-outline-success">Signup As Parent</a>
    		</div>
    		<div class=" col-lg-3 col-md-3 col-sm-3">
    			
    		</div>
    	</div>
    </div>
@endsection