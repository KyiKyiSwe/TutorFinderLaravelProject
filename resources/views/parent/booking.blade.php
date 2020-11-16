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
		    <div class="row tutor" data-aos="zoom-in" data-aos-delay="100" disabled="true">
		    	
		          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
		            <div class="member">
		            	@foreach($tutors as $tutor)
		               <img src="{{asset($tutor->photo)}}" class="img-fluid" alt="">
		               <h4>{{$tutor->user->name}}</h4>
		               <p>{{$tutor->id}}</p>

		                {{-- @foreach($users as $user)
		                <h4>
		                	@if($tutor->user_id == $user->id)
		                	{{$user->name}}
		                	@endif
		                </h4>
		                @endforeach --}}
		               <a href="{{route('tutordetail',$tutor->id)}}" class="btn btn-success">Detail
		               </a>
		               @endforeach     
		            </div>
		          </div>
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
            html+=`<img src="${row.photo}" class="img-fluid" alt="">
                   <h4>${row.user.name}</h4>
                   <p>${row.id}</p>
                   <a href="{{route('tutordetail',$tutor->id)}}" class="btn btn-success">Detail</a>`;
          }
          $('.tutor').prop('disabled',false);
          $('.member').html(html);
        })
      })
    })
   </script>
@endsection