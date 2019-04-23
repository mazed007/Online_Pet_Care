
@extends('layouts.master')
	
@section('content')<br>

@foreach($doctors as $row)
	
	
	<div class="media border p-3">
  <img src="{{ asset('images/slide/'. 'doclogin.png')}}"  class="mr-3 mt-3 rounded-circle" style="width:70px;">
  <div class="media-body">
    <h4>Name: {{$row['name']}}</h4>
    <p> Phone Number: {{$row['phone_number']}}<br>
    	Address: {{$row['address']}}<br>
    	Email: {{$row['email']}}<br>
	   </p>
  </div>
</div><br>
	@endforeach

	@endsection