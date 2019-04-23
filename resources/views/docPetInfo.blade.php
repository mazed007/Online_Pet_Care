	@extends('doctor.layout.master')
	@section('content')	
		<br>
		<div class="container">
	@foreach($petinfo as $row)
	@if( Auth::user()->name  == $row->doctor_name)
	<div class="media border p-3">
   <img src="{{ asset('images/slide/'.$row->image)}}"  class="mr-3 mt-3 rounded-circle" style="width:140px;">
  <div class="media-body">
   <p>Pet Type: {{$row->pet_type}}<br>
	  Pet Name:{{$row->pet_name}}<br>
	  Pet Owner Name:{{$row->pet_owner_name}}<br></p>
	 </div>
</div><br><br>
	@endif
	@endforeach
	</div>
	@endsection
	
	