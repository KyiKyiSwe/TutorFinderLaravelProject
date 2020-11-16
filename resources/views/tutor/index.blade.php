@extends('backendtemplate')
@section('content')

	
  <div class="content">
        <div class="container-fluid ml-5 mt-5">
          <div class="row ">
            <div class="col-md-12">
              <div class="card">

                <div class="card-header card-header-primary">
                  <h4 class="card-title text-center">Tutor Detail Information</h4>
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
                          <th>Julia</th>
                          <th>{{$row->phoneno}}</th>
                          
                          <th><a href="{{route('tutor.showdetail',$row->id)}}" class="btn btn-info">Detail</a></th>
                          <th>
                            <form method="post" action="" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')" >
            @csrf
            @method('DELETE')
            <input type="submit" name="btnsubmit" value="Delete" class="btn btn-primary">
                          </th>
                          
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



