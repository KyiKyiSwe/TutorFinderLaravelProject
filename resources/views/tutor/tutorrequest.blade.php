@extends('tutor.tutortemplate')
@section('content')  
    <!-- main -->
    <div class="container">
    	<div class="main-w3layouts wrapper my-5">
		<h1>Demo Request Detail</h1>
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
                    <th>Date & Time</th>
                    <th>Note</th>
                    <th>Status</th>    
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
                    <td>12.2.2002 10:PM </td>
                    <td>As quickly as you can</td>
                    <td><button class="btn btn-info">Confirm</button>
                      <button class="btn btn-info">Cancel</button></td>
                  </tr> 
                </tbody>
    		</table>
			</div>
		</div>	
	</div>
    </div>
	
	


  	
@endsection