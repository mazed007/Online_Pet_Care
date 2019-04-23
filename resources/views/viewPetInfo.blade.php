@extends('layouts.master')
@section('content')
<br>
<br>
	@foreach($PetInfos as $row)

	@if( Auth::user()->email  == $row['email'])
	
	<div class="media border p-3">
  <img src="{{ asset('images/slide/'.$row['image'])}}"  class="mr-3 mt-3 rounded-circle" style="width:140px;">
  <div class="media-body">
    <h4>pet_type: {{$row['pet_type']}}</h4>
    <p>pet_name: {{$row['pet_name']}}<br>
    	pet_owner_name: {{$row['pet_owner_name']}}<br>
	    email: {{$row['email']}}</p>
  </div>
</div><br>
	@endif
	@endforeach

@endsection