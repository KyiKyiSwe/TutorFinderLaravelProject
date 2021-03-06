@extends('tutor.tutortemplate')
<link href="{{asset('frontend_asset/css/parent.css')}}" rel="stylesheet">
@section('content')  
<!-- main -->
<div class="container my-5 text-center">
   <div class="main-w3layouts wrapper py-5">
      <h3>Tutor Information Detail</h3>
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
                  {{-- @foreach($feedback as $row) --}}

                  @foreach($feedback as $row)
                  @if($row->tutor_id == $tutorid)
                  <tr>
                     <td>{{$i++}}</td>
                     <td>{{$row->userparent->user->name}}</td>
                     <td>{{$row->subject->name}}</td>
                     <td>{{$row->comment}}</td>
                     <td>{{$row->date}}</td>
                  </tr>
                  @endif
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection