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
                     <th>Requested Id</th>
                     <th>Parent Name</th>
                     <th>Level</th>
                     <th>Grade</th>
                     <th>Subject</th>
                     <th>Amount</th>
                     <th>Start Date</th>
                     
                  </tr>
               </thead>
               <tbody>
                  @php 
                  $i=1;
                  @endphp
                  <tr>
                     @foreach($tutors as $row)
                     <td>{{$i++}}</td>
                     <td>{{$row->user->name}}</td>
                     <td>
                        Primary 
                     </td>
                     <td>{{$row->grade->name}}</td>
                     <td> {{$row->subject->name}}</td>
                     <td>500000</td>
                     <td>{{$tutors->requesttutor->date}}</td>
                     
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection