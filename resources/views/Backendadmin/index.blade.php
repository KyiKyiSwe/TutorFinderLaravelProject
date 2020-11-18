@extends('backendtemplate')
@section('content')

	
  <div class="content">
        <div class="container-fluid  mt-5">
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
                        <th class="px-3">
                          No
                        </th>
                        <th class="px-3">
                          Tutor Name
                        </th>
                        <th class="px-3">
                          Phone
                        </th>
                        <th class="px-5">
                          Action
                        </th>
                        {{-- <th class="px5">
                          Action
                        </th> --}}
                       
                      </thead>

                      <tbody>
                        @php
                          $i=1;
                          @endphp

                          @foreach($tutors as $row)
                        <tr class="text-center">
                          <td>{{$i++}}</td>                         
                          <td>{{$row->user->name}}</td>
                          <td>{{$row->phoneno}}</td>
                          
                          <td>
                            <a href="{{route('tutor.show',$row->id)}}">
                              <input type="summit" name="btnsubmit" value="Detail" class="btn btn-primary">
                            </a>
                          </th>
                          {{-- <td>
                            <form method="post" action="{{route('tutor.destroy',$row->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')" >
                              @csrf
                              @method('DELETE')
                              <input type="submit" name="btnsubmit" value="Delete" class="btn btn-primary">
                          </td> --}}
                          
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



