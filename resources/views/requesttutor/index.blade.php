@extends('tutor.tutortemplate')
<link href="{{asset('frontend_asset/css/parent.css')}}" rel="stylesheet">
@section('content')  
<!-- main -->
<div class="container py-5">
<div class="main-w3layouts wrapper my-5">

<div class="main-agileinfo">
   <div class="agileits-top">
      <div class="row">
         <div class="col-md-12">
            <div class="tile text-center">
               <h3 class="d-inline-block my-3">Request List</h3>

              {{--  @if($requesttutor->tutor_id == $tutorid) --}}

               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active pending" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link confirm" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Confirm</a>
                  </li>
               </ul>
               <div class="tab-content mt-3" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <table class="table mt-3 table-bordered dataTable">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Parent Name</th>
                              <th>Subject</th>
                              <th>Date & Time</th>
                              <th>Note</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php 
                           $i=1;
                           @endphp
                           @foreach($pending_orders as $row)
                           @if($row->tutor_id == $tutorid)
                           <tr>
                              <td>{{$i++}}</td>
                              <td>{{$row->userparent->user->name}}</td>
                              <td>
                                 {{$row->subject->name}}
                              </td>
                              <td>{{$row->requestdate}}</td>
                              <td>{{$row->note}}</td>
                              <td>
                                  @if($row->status == 0)
                                 <form method="post" action="{{route('requesttutor.confirm',$row->id)}}">
                                    @csrf
                                    <button class="btn btn-success" type="submit">Confirm</button>
                                    <a href="{{route('requesttutor.index')}}" class="btn btn-success">Back</a>
                                 </form>
                                 @elseif($row->status ==1)
                                 <button class="btn btn-success">Success Order</button>
                                 <a href="{{route('requesttutor.index')}}" class="btn btn-success">Back</a>
                                 @endif
                              </td>
                           </tr>
                            @endif
                           @endforeach
                        </tbody>
                     </table>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <table class="table mt-3 table-bordered dataTable">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Parent Name</th>
                              <th>Subject</th>
                              <th>Date & Time</th>
                              <th>Note</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php 
                           $i=1;
                           @endphp
                           @foreach($confirmed_orders as $row)
                           @if($row->tutor_id == $tutorid)
                           <tr>
                              <td>{{$i++}}</td>
                              <td>{{$row->userparent->user->name}}</td>
                              <td>
                                 {{$row->subject->name}}
                              </td>
                              <td>{{$row->requestdate}}</td>
                              <td>{{$row->note}}</td>
                           </tr>
                           
                           @endif
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
</div>
</div>
</div>
</div>
@endsection