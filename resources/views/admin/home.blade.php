@extends('admin.layout.auth')

@section('content')
<div class="container">
<br>
<br>

    <div class="col-md-3">
        <div class="menu-img">
        <a href="{{route('admin.admindoc')}}">
        <img src="" " alt="Cinque Terre" width="250" height="170"> 
        <h3>Doctor Information</h3></a>
       <!-- <p>section 1 details</p>-->
        </div>
    </div>
    <div class="col-md-3">
        <div class="menu-img">
        <a href="{{route('admin.adminDocAppoint')}}">
        <img src="{{ asset('images/slide/'. 'appoinment.jpg')}}" alt="Cinque Terre" width="250" height="170"> 
        <h3>Doctor Appointment</h3></a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>
    <div class="col-md-3">
        <div class="menu-img">
        <a href="{{route('admin.adminReserv')}}">
        <img src="{{ asset('images/slide/'. 'reservation.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="250" height="170"> 
        <h3>Seat Reservation</h3></a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
    <div class="col-md-3">
        <div class="menu-img">
        <a href="{{route('admin.adminPatient')}}">
        <img src="" class="rounded-circle" alt="Cinque Terre" width="250" height="170"> 
        <h3>Patient Information</h3></a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
</div>
@endsection
