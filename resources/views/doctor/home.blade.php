@extends('doctor.layout.master')

@section('content')
<div class="emergency">
  <div class='container margin-top-20'>
    <br><h1>Doctor Appointment Request</h1><br>
    @foreach($appoinments as $row)
    
    @if( Auth::user()->name  == $row['doctor_name'])
    <div class="media border p-3">
  <img src="{{ asset('images/slide/'. 'doclogin.png')}}"  class="mr-3 mt-3 rounded-circle" style="width:70px;">
  <div class="media-body">
    <h4>Pet Type: {{$row['pet_type']}}</h4>
    <p>pet_diseases: {{$row['pet_diseases']}}<br>
        Address: {{$row['address']}}<br>
        phone_number: {{$row['phone_number']}}<br>
         Email: {{$row['email']}}</p>
  </div>
</div><br>
    @endif
    @endforeach
    <br>
    <h1>Doctor Send Mail To Pet Owner</h1><br>
<form action="send" method="post">
{{csrf_field()}}
<b>Email:</b> <input type="text" name="to"><br><br>
<b>Message:</b> <textarea class="form-control" name="message" cols="30" rows="10"></textarea><br>
 <input type="submit" class="btn btn-primary" value="sends">
</form><br>
</div>
</div>
@endsection
