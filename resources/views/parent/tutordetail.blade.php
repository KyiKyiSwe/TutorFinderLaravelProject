@extends('parent.parenttemplate')

<link href="{{asset('frontend_asset/register/css/registercss.css')}}" rel="stylesheet">

@section('content')
    <div class="container my-5 py-5">

    <div class="row my-5">

      <div class="col-md-6">
        <img src="{{asset($tutor->photo)}}" class="img-fluid">
      </div>

      <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Name: {{$tutor->user->name}}</h4>
                {{-- <p>ID: {{$tutor->id}}</p> --}}
                <p>Address: {{$tutor->address}}</p>
                <p>City: {{$tutor->city}}</p>
            </div>
            <div class="card-body">
            	<label class="radio">Subject:</label>
            	@foreach($tutor->subjects as $subjects)
            	<input type="radio" name="radio" value={{$subjects->id}}>
                <label class="radio">
                	{{$subjects->name}}
                	 {{-- @if($subjects->pivot->subject_id == $subject->id)
                	   
                	   {{$subject->name}}
                	   
                	 @endif --}}
                </label>                	
                @endforeach
                </label>
               
            </div>
            <div class="card-footer">
                
                <textarea class="notes my-5" required="" placeholder="Any Request..."></textarea>
            </div>
            <button class="btn btn-success d-block requestbtn" data-id={{$tutor->id}}>
                  Request
            </button>

        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
@endsection

@section('script')
   <script type="text/javascript">
       
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $(document).ready(function () {
            $('.requestbtn').click(function () {
               //alert('ok');
              let notes = $('.notes').val();
              var subject = $("input[name='radio']:checked").val();
              let id = $(this).data('id');
              console.log(id);
              console.log(subject);
              $.post("{{route('requesttutor.store')}}",{notes:notes,id:id,subject:subject},function (response) {
                console.log(response.msg);
                //localStorage.clear();
                //location.href="/userparent";
              })
            })
          })
   </script>
@endsection
{{-- @section('script')
  
  <script type="text/javascript">
    $(document).ready(function(){
       
      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
      });

      $('.requestbtn').click(function(){
        var id = $(this).data('id');

        var request = {
          id:id
        }
        console.log(request);
        var requestlist = localStorage.getItem("requests");
        console.log(requestlist);

        var RequestArray;
        if(requestlist == null){
            RequestArray = [];
        }else{
            RequestArray = JSON.parse(requestlist);
        }

        RequestArray.push(request);

        var requeststring = JSON.stringify(RequestArray);
        localStorage.setItem("requests",requeststring);
      })

      $('.sendbtn').click(function () {
          //alert('ok');
          let notes = $('.notes').val();
          let request = localStorage.getItem('requests'); // JSON String
          $.post("{{route('requesttutor.store')}}",{request:request,notes:notes},function (response) {
              console.log(response.msg);
              localStorage.clear();
              location.href="userparent";
          })
        })

    })
  </script>
@endsection() --}}