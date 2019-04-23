@extends('layouts.master')
@section('content')

  <br>
  <div class='container margin-top-20'>
<h1>Doctor Appointment</h1>
@foreach($appoinments as $row)
	
	
	<div class="media border p-3">
  <img src="{{ asset('images/slide/'. 'doclogin.png')}}"  class="mr-3 mt-3 rounded-circle" style="width:70px;">
  <div class="media-body">
    <h4>Name: {{$row['pet_type']}}</h4>
    <p>Phone Number: {{$row['pet_diseases']}}<br>
    	Address: {{$row['doctor_name']}}<br>
	    email: {{$row['phone_number']}}</p><a href="/deleteAppoint/{{$row['id']}}"><button>delete</button></a>
  </div>
</div><br>
	@endforeach


</div>
@endsection