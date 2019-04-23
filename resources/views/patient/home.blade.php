@extends('layouts.master')
@section('content')
<div class="petOwner">
<section id="menu" class="text-center">
<div class="container">
<br>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('patient.test')}}">
        <img src="{{ asset('images/slide/'. 'doctor.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="250" height="236"> 
        <h3>View Doctor Information</h3></a>
       <!-- <p>section 1 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('patient.appoinment')}}">
        <img src="{{ asset('images/slide/'. 'appoinment.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="250" height="236"> 
        <h3>Doctor Appointment</h3></a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('patient.reservation')}}">
        <img src="{{ asset('images/slide/'. 'reservation.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="250" height="236"> 
        <h3>Seat Reservation</h3></a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>


      <div class="col-md-6">
        <br><br><br><br> <div class="menu-img">
        <a href="{{route('patient.addPetInfo')}}">
        <img src="{{ asset('images/slide/'. 'addPet.png')}}"  alt="Cinque Terre" width="250" height="236"> 
        <h3>Add Your Pet Information</h3></a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>
    <div class="col-md-6">
      <br><br><br><br>  <div class="menu-img">
        <a href="{{route('patient.viewPetInfo')}}">
        <img src="{{ asset('images/slide/'. 'viewPet.png')}}"  alt="Cinque Terre" width="250" height="236"> 
        <h3>View Your Pet Information</h3></a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
    </div>
</div>




</section><br><br>
<section id="menu2" class="text-center">
<div class="container">
<img class="d-block w-100" src="{{ asset('images/slide/'. 'ani.jpg')}}" height="350" ">
</div>
</section>
</div>
@endsection