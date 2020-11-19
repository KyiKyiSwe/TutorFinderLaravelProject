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
				            	{{-- <form method="post" action="">
				            		<textarea class="form-control my-3 comment" placeholder="Any Comment..">
				            			
				            		</textarea>				            		
				            		<button class="form-control btn btn-success sendfeedback">
				            		    Send Feedback
				            		</button>
				            	</form> --}}
				            	<textarea class="form-control my-3 comment" placeholder="Any Comment.."></textarea>
				            	<a href="javascript:void(0)" class="btn form-control btn btn-success sendfeedback">
				            		Send Feedback
				            	</a>
				            	{{-- <button class="form-control btn btn-success sendfeedback">
				            		    Send Feedback
				            	</button> --}}
				            </div>
			            </div>
			            <div class="col-md-4"></div>
			        </div>
			    </div>
			</div>

       </div>
    </div>

@endsection

@section('script')
   
   <script type="text/javascript" src="{{asset('feedback/custom.js')}}"></script>

   <script type="text/javascript">
   
	   $.ajaxSetup({
	         headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	         }
	   });


	   $(document).ready(function(){

	         $('.sendfeedback').click(function () {
	          //alert('ok');
	          let comment = $('.comment').val();
	          let feedback = localStorage.getItem('feedbacks'); // JSON String
	          console.log(feedback);
	          console.log(comment);
	          $.post("/comment",{comment:comment,feedback:feedback},function (response) {
	            console.log(response.msg);
	            localStorage.clear();
	            location.href = "/parentrequest";
	          })
	        })   
	         

	   })
      
      

   </script>
@endsection