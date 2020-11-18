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
                        <th>No</th>
                        <th>Parent Name</th>
                        <th>E-mail</th>
                        <th>Contact no:</th>
                        <th>Address</th>
                        <th>City</th>
                        {{-- <th>Action</th>  --}}
                      </thead>

                      <tbody>
                        @php
                          $i=1;
                        @endphp

                        @foreach($parents as $parent)
                        <tr class="text-center">
                          <th>{{$i++}}</th>
                          <th>{{$parent->user->name}}</th>
                          <th>{{$parent->user->email}}</th>                          
                          <th>{{$parent->phoneno}}</th>
                          <th>{{$parent->address}}</th>
                          <th>{{$parent->city}}</th>

                          {{-- <th>
                            <form method="post" action="{{route('userparent.destroy',$parent->id)}}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="btnsubmit" value="Delete" class="btn btn-secondary">
                          </form>
                          </th> --}}
                          
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



