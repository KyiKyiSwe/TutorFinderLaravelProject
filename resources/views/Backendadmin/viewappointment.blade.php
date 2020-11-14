@extends('backendtemplate')
@section('content')

	
  <div class="content">
        <div class="container-fluid mt-5">
          <div class="row ">
            <div class="col-md-12">
              <div class="card">

                <div class="card-header card-header-primary">
                  <h4 class="card-title text-center">Appointment Detail Information</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
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
                          Start Time
                        </th>
                        <th>
                          Request Status
                        </th>
                        <th>
                          Payment Status
                        </th>
                       
                      </thead>

                      <tbody>
                        @php
                          $i=1;
                          @endphp

                          
                        <tr class="text-center">
                          <th>{{$i++}}</th>
                          <th>1</th>
                          <th>Daw Mya Mya</th>                          
                          <th>Mrs. Julia</th>
                          <th>Primary</th>
                          <th>Grade2</th>
                          <th>Maths</th>
                          <th>12.11.2020</th>
                          <th>9:00 AM</th>
                          <th>Confirm</th>
                          <th>Paid</th>
                          
                          
                        </tr>
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



