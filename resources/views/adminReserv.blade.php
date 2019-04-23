@extends('layouts.master')
@section('content')

  <br>
  <div class='container margin-top-20'>
<h1>Seat Reservation</h1>
@foreach($reservs as $row)
	
	
	<div class="media border p-3">
  <img src="{{ asset('images/slide/'. 'doclogin.png')}}"  class="mr-3 mt-3 rounded-circle" style="width:70px;">
  <div class="media-body">
    <h4>pet_type: {{$row['pet_type']}}</h4>
    <p>Phone Number: {{$row['phone_number']}}<br>
    	Address: {{$row['address']}}<br>
	    email: {{$row['email']}}<br>
      start_day: {{$row['start_day']}}<br>
      end_day: {{$row['end_day']}}</p><a href="/deleteReserv/{{$row['id']}}"><button>delete</button></a>
  </div>
</div><br>
	@endforeach


</div>
@endsection