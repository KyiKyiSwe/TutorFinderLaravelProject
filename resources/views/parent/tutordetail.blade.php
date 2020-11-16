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
                <p>Address: {{$tutor->address}}</p>
                <p>City: {{$tutor->city}}</p>
            </div>
            <div class="card-body">
            	<label class="radio">Subject:</label>
            	@foreach($tutor->subjects as $subjects)
            	<input type="radio" name="radio">
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
                <button class="btn btn-success d-block requestbtn" data-id={{$tutor->id}}>
                   Request
                </button>
                <textarea class="notes my-5" required="" placeholder="Any Request..."></textarea>
            </div>

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
               alert('ok');
              let notes = $('.notes').val();
              let id = $(this).data('id');
              
              $.post("{{route('requesttutor.store')}}",{notes:notes,id:id},function (response) {
                //console.log(response.msg);
                //localStorage.clear();
                //location.href="userparent";
              })
            })
          })
   </script>
@endsection