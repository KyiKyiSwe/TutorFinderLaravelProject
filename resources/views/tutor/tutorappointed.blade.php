@extends('tutor.tutortemplate')
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
                    <th>Requested Id</th>
                    <th>Parent Name</th>
                    <th>Level</th>
                    <th>Grade</th>
                    <th>Subject</th>
                    <th>Amount</th>
                    <th>Start Date</th>
                    <th>Start Time</th>    
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $i=1;
                  @endphp
                  
                  <tr>
                    <td>{{$i++}}</td>
                    <td>Daw Mya Mya</td>
                    <td>
                      Primary 
                    </td>
                    <td>Grade 2</td>
                    <td>English</td>
                    <td>500000 </td>
                    <td>12.2.2002</td>
                    <td>Monday 10:00 AM</td>
                  </tr> 
                </tbody>
    		</table>
			</div>
		</div>	
	</div>
    </div>
	
	


  	
@endsection