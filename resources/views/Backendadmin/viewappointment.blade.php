@extends('backendtemplate')
@section('content')

	
  <div class="content">
        <div class="container-fluid mt-5 mx-5">
          <div class="row ">
            <div class="col-md-12">
              <div class="card">

                <div class="card-header card-header-primary" style="color:lime green;">
                  <h4 class="card-title text-center">Appointment Detail Information</h4>
                  <p class="card-category"> The information about appointment that send from customer</p>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-responsive">
                      <thead class=" text-primary text-center">
                        <th> No</th>
                        <th> Parent Name</th>
                        <th> Tutor Name</th>
                        <th> Subject</th>
                        <th> Start Date</th>
                        <th> Request Status</th>
                        
                       
                      </thead>

                      <tbody>
                        @php
                          $i=1;
                          @endphp

                      @foreach($requesttutor as $row)                          
                        <tr class="text-center">
                          <th>{{$i++}}</th>
                          <th>{{$row->userparent->user->name}}</th>                 
                          <th>{{$row->tutor->user->name}}</th>
                          <th>{{$row->subject->name}}</th>
                          <th>{{$row->requestdate}}</th>
                          @if($row->status == 0)
                          <th>pending</th> 
                          @elseif($row->status == 1) 
                           <th>confirm</th>
                           @endif 
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



