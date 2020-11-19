@extends('parent.parenttemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
  
    <!-- main -->
	<div class="main-w3layouts wrapper my-5">
		
		<h5>Please choose the following data</h5>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form >

		            <div class="form-group">
		              <label>Grade:</label>
		              <select name="grade" class="form-control grade">
		                <optgroup label="Choose Grade">
		                  @foreach($grades as $grade)
		                  <option value="{{$grade->id}}">{{$grade->name}}</option>
		                  @endforeach
		                </optgroup>
		              </select>
		            </div>
				</form>


				
			</div>
		</div>
		<div class="container my-3">
			<div class="tutor">
			<div class="member">
		    <div class="row " data-aos="zoom-in" data-aos-delay="100" disabled="true">
		    	  
		    	   @foreach($tutors as $tutor)
		           <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
		            
		            <div class="">
		               
		               <img src="{{asset($tutor->photo)}}" class="img-fluid" alt="">
		               <h4>{{$tutor->user->name}}</h4>
		               {{-- <p>{{$tutor->id}}</p> --}}

		                {{-- @foreach($users as $user)
		                <h4>
		                	@if($tutor->user_id == $user->id)
		                	{{$user->name}}
		                	@endif
		                </h4>
		                @endforeach --}}
		                <div>
		                	<a href="{{route('tutordetail',$tutor->id)}}" class="btn btn-success mb-3">Detail
		                   </a>
		                </div>
		               
		                   
		            </div>

		          </div>
		          @endforeach

		          
		    </div>
		    </div>
		    </div>
		</div>
		    {{-- <div class="row">
		    	@foreach($tutors as $tutor)
		    	<div class="col-md-6 col-lg-4 ">
		    		<div class="">
		    			<img src="" class="img-fluid" alt="">
		    			<h4> </h4>
                        <a href=""></a>
		    			
		    		</div>
		    		
		    	</div>
		    	@endforeach
		    </div> --}}
		
		
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

@section('script')
   <script type="text/javascript">
   	$(document).ready(function () {

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('.grade').change(function () {
        let gradeid = $(this).val();
        //let userid = $users->name;
        //alert(gradeid);
        $.post("{{route('filterGrade')}}",{gid:gradeid},function (response) {
        //console.log(response);
         var html = "";
          for(let row of response){
          	let row_id = row.id;
          	// console.log(row_id);
          	
          	html+=`<img src="${row.photo}" class="img-fluid" alt="" width="30%">
          	       
                   <h4>${row.user.name}</h4>
                   

                   <a href="/tutordetail/${row.id}" class="btn btn-success">Detail</a>`;
          	
            
          }
          $('.tutor').prop('disabled',false);
          $('.member').html(html);
        })
      })
    })
   </script>
@endsection