@extends('backendtemplate')
@section('content')

	
  <div class="content">
        <div class="container-fluid ml-5 mt-5">
          <div class="row ">
            <div class="col-md-12">
              <div class="card">

                <div class="card-header card-header-primary">
                  <h4 class="card-title text-center">Parent Detail Information</h4>
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
                          Parent Name
                        </th>
                        <th>
                          E-mail
                        </th>
                        <th>
                          Contact no:
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Action
                        </th>
                       
                      </thead>

                      <tbody>
                        @php
                          $i=1;
                          @endphp

                       
                        <tr class="text-center">
                          <th>{{$i++}}</th>
                          <th>Daw Mya Mya</th>
                          <th>myamya@gmail.com</th>                          
                          <th>09-83843477347</th>
                          <th>Between 32 x 33 street</th>
                          <th>Mandalay</th>

                          <th><a href="" class="btn btn-info">Delete</a></th>
                          
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



