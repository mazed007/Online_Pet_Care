@extends('layouts.master')
@section('content')

  <br>
  <div class='container margin-top-20'>
<h1>Doctor Information</h1>
@foreach($doctors as $row)
	
	
	<div class="media border p-3">
  <img src="{{ asset('images/slide/'. 'doclogin.png')}}"  class="mr-3 mt-3 rounded-circle" style="width:70px;">
  <div class="media-body">
     <h4>Name: {{$row['name']}}</h4>
    <p>Phone Number: {{$row['phone_number']}}<br>
      Address: {{$row['address']}}<br>
      email: {{$row['email']}}</p>
  </div>
</div><br>
	@endforeach


</div>
@endsection
