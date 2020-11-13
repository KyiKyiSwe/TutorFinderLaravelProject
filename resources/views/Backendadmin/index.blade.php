@extends('backendtemplate')
@section('content')

	
  <div class="content">
        <div class="container-fluid ml-5 mt-5">
          <div class="row ">
            <div class="col-md-12">
              <div class="card">

                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tutor Table</h4>
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
                          Image
                        </th>
                        <th>
                          Tutor Id
                        </th>
                        <th>
                          Tutor Name
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Action
                        </th>
                        <th>
                          Action
                        </th>
                       
                      </thead>

                      <tbody>
                        @php
                          $i=1;
                          @endphp

                          @foreach($tutors as $row)
                        <tr class="text-center">
                          <th>{{$i++}}</th>
                          <th>{{$row->photo}}</th>
                          <th>{{$row->id}}</th>                          
                          <th>{{$row->user->name}}</th>
                          <th>{{$row->phoneno}}</th>
                          
                          <th><a href="{{route('tutor.show',$row->id)}}" class="btn btn-info">Detail</a></th>
                          <th><a href="" class="btn btn-info">Delete</a></th>
                          
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



