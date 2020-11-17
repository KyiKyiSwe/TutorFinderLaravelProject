@extends('tutor.tutortemplate')
@section('content')  
<!-- main -->
<div class="container  my-5 py-5">
   <div class="main-w3layouts wrapper">
      <h1>Subject Detail</h1>
      <div class="main-agileinfo">
         <div class="agileits-top">
            <a href="{{route('subject.create')}}" class="btn btn-success my-3 float-right">Add New</a>
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
                  {{-- @if($subject->sub_tutors->tutor_id == $tu_id) --}}
                  @foreach($subject as $row)
                  <tr>
                     <td>{{$i++}}</td>
                     <td>{{$row->name}}</td>
                     <td>
                        {{-- {{$subject->pivot->fee}} --}}
                     </td>
                     <td></td>
                     <td><button class="btn btn-success">Edit</button>
                        <button class="btn btn-success">Delete</button>
                     </td>
                  </tr>
                  @endforeach
                  {{--  @endif --}}
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection