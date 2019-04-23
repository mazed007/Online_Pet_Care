@extends('layouts.master')
@section('content')

  <br>
  <div class='container margin-top-20'>
<h1>User Information</h1>
@foreach($patients as $row)
	
	
	<div class="media border p-3">
  <img src="{{ asset('images/slide/'. 'doclogin.png')}}"  class="mr-3 mt-3 rounded-circle" style="width:70px;">
  <div class="media-body">
    <h4>name: {{$row['name']}}</h4>
    <p>Phone Number: {{$row['phone_number']}}<br>
    	Address: {{$row['address']}}<br>
	    email: {{$row['email']}}<br> </p><a href="/delete/{{$row['id']}}"><button>delete</button></a>
  </div>
</div><br>
	@endforeach


</div>
@endsection