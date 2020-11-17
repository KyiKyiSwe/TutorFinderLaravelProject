@extends('tutor.tutortemplate')
@section('content')  

   
<!-- main -->
<div class="container  py-5 text-center">
   <div class="main-w3layouts wrapper my-5 ">
      <h3>Subject Detail</h3>
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
                 
                  @foreach($subjects as $value)
                   @foreach($value->tutors as $tu)
                   @if($tu->pivot->tutor_id == $tutorid)

                  <tr>

                    <td>{{$i++}}</td>
                  
                    <td>{{$value->name}}</td>
                    
                    <td> {{$tu->pivot->fee}}</td>
                   
                    <td>{{$tu->pivot->hours}}</td>
                     
                    <td>
                      <a href="{{route('subject.edit',$value->id)}}" class="btn btn-success">Edit</a>
                      <button class="btn btn-success">Delete</button></td>
                  </tr> 
                  @endif  
                    @endforeach
                   
                  @endforeach
                
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection