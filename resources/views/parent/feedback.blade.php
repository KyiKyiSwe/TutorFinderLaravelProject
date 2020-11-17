@extends('parent.parenttemplate')
<link href="{{asset('frontend_asset/css/parent.css')}}" rel="stylesheet">
@section('content') 
   
    <div class="container py-5">
       <div class="main-w3layouts wrapper my-5">

	       	<div class="main-agileinfo">
			   <div class="agileits-top">
			        <div class="row">
			        	<div class="col-md-4"></div>
			            <div class="col-md-4">
			            	<div class="tile text-center">
			            		<h3 class="d-inline-block my-3">Send Your Feedback!</h3>
				            	<form method="post" action="">
				            		<textarea class="form-control my-3 comment" placeholder="Any Comment..">
				            			
				            		</textarea>				            		
				            		<button class="form-control btn btn-success feedbackbtn">
				            		    Send Feedback
				            		</button>
				            	</form>
				            </div>
			            </div>
			            <div class="col-md-4"></div>
			        </div>
			    </div>
			</div>

       </div>
    </div>

@endsection