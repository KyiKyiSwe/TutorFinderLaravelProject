@extends('parent.parenttemplate')
  <link href="{{asset('frontend_asset/css/parent.css')}}" rel="stylesheet">
@section('content')  
    <!-- main -->
    <div class="container my-5 py-5">
    	<div class="main-w3layouts wrapper my-3 py-5">
		    <h3>AcceptedTutor Detail</h3>
		    <div class="main-agileinfo">
			    <div class="agileits-top">
			       <table class="table mt-5 table-bordered dataTable my-5 py-5">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tutor Name</th>
                    <th>Level</th>
                    <th>Grade</th>
                    <th>Subject</th>
                    <th>Note</th>
                    <th>Status</th> 
                    <th>Start Date</th>
                    <th>Total Amount</th>
                    <th>Action</th>   
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
                    <td>As quickly as you can</td>
                    <td>Confirm</td>
                    <td>11/14/2020</td>
                    <td>100000</td>
                    <td>
                      <a href="" class="btn btn-success">Feedback</a>
                    </td>
                  </tr> 
                </tbody>
    		     </table>
			    </div>
		    </div>	
	    </div>
    </div>
  	
@endsection