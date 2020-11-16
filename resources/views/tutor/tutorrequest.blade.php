@extends('tutor.tutortemplate')
   <link href="{{asset('frontend_asset/css/parent.css')}}" rel="stylesheet">
@section('content')  
    <!-- main -->
    <div class="container">
    	<div class="main-w3layouts wrapper my-5">
		<h1>Demo Request Detail</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			{{-- <table class="table mt-5 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>Requested Id</th>
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
                  @foreach($requesttutor as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->userparent->user->name}}</td>
                    <td>English</td>
                    <td>{{$row->requestdate}}</td>
                    <td>{{$row->note}}</td>
                    <td><button class="btn btn-success">Confirm</button>
                      <button class="btn btn-success">Cancel</button></td>
                  </tr> 
                  @endforeach
                </tbody>
    	</table> --}}

      <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <table class="table mt-3 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>Requested Id</th>
                    <th>Parent Name</th>
                    <th>Subjct</th>
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
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->userparent->user->name}}</td>
                    <td>
                      English
                    </td>
                    <td>{{$row->requestdate}}</td>
                    <td>{{$row->note}}</td>
                    <td>
                      
                      @if($request_tutor->status == 0)
        <form method="post" action="{{route('tutor.confirm',$tutor->id)}}">
          @csrf
          
          <button class="btn btn-info" type="submit">Confirm</button>
          <a href="{{route('tutor.tutorrequest')}}" class="btn btn-info">Back</a>

        </form>
         
         
       @elseif($order->status ==1)
       
        <button class="btn btn-success">Success Order</button>
        <a href="{{route('tutor.tutorrequest')}}" class="btn btn-info">Back</a>
       
       @endif

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <table class="table mt-3 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>Requested Id</th>
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
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->userparent->user->name}}</td>
                    <td>
                      English
                    </td>
                    <td>{{$row->requestdate}}</td>
                    <td>{{$row->note}}</td>
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