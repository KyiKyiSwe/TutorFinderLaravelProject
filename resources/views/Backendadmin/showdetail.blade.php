@extends('backendtemplate')
@section('content')


    
    <div class="row mt-5 ml-5">
      <div class="col-md-12">
        <div class="tile">
          <h2> Detail Information</h2>

          <div class="card my-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{asset($tutor->photo)}}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$tutor->id}}: Julia</h5>
                  <p class="card-text">{{$tutor->email}}</p>
                  
                  <p class="card-text">{{$tutor->phoneno}}</p>
                  <p class="card-text">{{$tutor->schoolname}}</p>
                  <p class="card-text">{{$tutor->qualification}}</p>
                  <p class="card-text">{{-- {{$tutor->level->name}} --}}</p>
                  <p class="card-text">{{-- {{$tutor->grade->name}} --}}</p>
                  <p class="card-text">{{$tutor->address}}</p>
                  <p class="card-text">{{$tutor->city}}</p>

                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



@endsection