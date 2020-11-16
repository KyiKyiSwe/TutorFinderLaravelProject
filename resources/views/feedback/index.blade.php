@extends('tutor.tutortemplate')
  <link href="{{asset('frontend_asset/css/parent.css')}}" rel="stylesheet">
@section('content')  
    <!-- main -->
    <div class="container">
    	<div class="main-w3layouts wrapper my-5">
		<h1>Tutor Information Detail</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			<table class="table mt-5 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Parent Name</th>
                    <th>Subject</th>
                    <th>Comment</th>
                    <th>Date</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $i=1;
                    //var_dump($feedback);
                  @endphp

                  {{-- to show auth user feedback --}}


                  @foreach($feedback as $row)
                  
                  
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->userparent->user->name}}</td>
                    @foreach($tutors->subjects as $value)
                    <td>{{$value}}</td>
                    @endforeach

                    <td>{{$row->comment}}</td>


                    <td>date</td>
                  </tr> 
                  @endforeach
                  

                </tbody>
    		</table>
			</div>
		</div>	
	</div>
    </div>
	
	


  	
@endsection