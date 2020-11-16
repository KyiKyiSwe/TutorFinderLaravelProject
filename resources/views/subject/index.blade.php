@extends('tutor.tutortemplate')
@section('content')  
    <!-- main -->
    <div class="container">
    	<div class="main-w3layouts wrapper my-5">
		<h1>Subject Detail</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
        <a href="{{route('subject.create')}}" class="btn btn-info my-3 float-right">Add New</a>
			<table class="table mt-5 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    
                    <th>Subject</th>
                    <th>Fee</th>
                    
                    <th>Hours</th>
                    <th>Action</th>
                     
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $i=1;
                  @endphp
                  @foreach($subject as $row)
                  <tr>
                    <td>{{$i++}}</td>
                  
                    <td>{{$row->name}}</td>
                    <td>
                      {{-- {{$subject->pivot->fee}} --}}
                    </td>
                    <td></td>
                   
                    
                    <td><button class="btn btn-info">Edit</button>
                      <button class="btn btn-info">Delete</button></td>
                  </tr> 
                  @endforeach
                </tbody>
    		</table>
			</div>
		</div>	
	</div>
    </div>
	
	


  	
@endsection