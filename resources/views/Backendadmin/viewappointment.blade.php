@extends('backendtemplate')
@section('content')

	
  <div class="content">
        <div class="container-fluid mt-5 mx-5">
          <div class="row ">
            <div class="col-md-12">
              <div class="card">

                <div class="card-header card-header-primary">
                  <h4 class="card-title text-center">Appointment Detail Information</h4>
                  <p class="card-category"> The information about appointment that send from customer</p>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary text-center">
                        <th>
                          No
                        </th>
                        <th>
                          Request Id
                        </th>
                        <th>
                          Parent Name
                        </th>
                        <th>
                          Tutor Name
                        </th>
                        <th>
                          Level
                        </th>
                        <th>
                          Grade
                        </th>
                        <th>
                          Subject
                        </th>
                        <th>
                          Start Date
                        </th>
                        
                        <th>
                          Request Status
                        </th>
                        
                       
                      </thead>

                      <tbody>
                        @php
                          $i=1;
                          @endphp

                      @foreach($requesttutor as $row)                          
                        <tr class="text-center">
                          <th>{{$i++}}</th>
                          <th>{{$row->id}}</th>
                          <th>{{$row->userparent->name}}</th>                          
                          <th>{{$row->tutor->name}}</th>
                          <th>{{-- {{$row->level->name}} --}}</th>
                          <th>{{-- {{$row->tutor->level->name}} --}}</th>
                          <th>{{-- {{$row->subject->name}} --}}subject</th>
                          <th>{{$row->requestdate}}</th>

                          <th>{{$row->status}}</th>  
                        </tr>
                        @endforeach
                   </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
          
          </div>
        </div>
      </div>
      


@endsection



