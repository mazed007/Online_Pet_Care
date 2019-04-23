<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('images/slide/'. 'ani.jpg')}}" height="350" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/slide/'. 'ani2.jpg')}}" height="350" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/slide/'. 'ani3.jpg')}}" height="350" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@extends('layouts.master')
@section('content')

 
<!--<img src="{{ asset('images/slide/'. 'home.jpg')}}" />-->
<div class="tips">
<div class="box">
    <img src="{{ asset('images/slide/'. 'tips.jpg' )}}" height="150" width="250" />
    <h4>Healthy Food</h4>
    <p>Two connected elements of responsible pet ownership include providing animals with fresh, cool water and healthy food at all times. <a href="{{route('tips')}}">
    <h5>Read More</h5>
    </a>
  </p>
    
    </div>
    <div class="box">
    <img src="{{ asset('images/slide/'. 'pethealth2.jpg' )}}" height="150" width="250" />
    <h4>Exercise</h4>
    <p>Two connected elements of responsible pet ownership include providing animals with fresh, cool water and healthy food at all times. <a href="{{route('tips')}}">
    <h5>Read More</h5>
    </a>
  </p>
    </div>
    <div class="box">
    <img src="{{ asset('images/slide/'. 'pet-health3.jpg' )}}" height="150" width="250" />
   <h4>Screening tests</h4>
    <p>Two connected elements of responsible pet ownership include providing animals with fresh, cool water and healthy food at all times. <a href="{{route('tips')}}">
    <h5>Read More</h5>
    </a>
  </p>
    </div>
    <div class="box">
    <img src="{{ asset('images/slide/'. 'pet-health1.jpg' )}}" height="150" width="250" />
    <h4>Dental care</h4>
    <p>Two connected elements of responsible pet ownership include providing animals with fresh, cool water and healthy food at all times. <a href="{{route('tips')}}">
    <h5>Read More</h5>
    </a>
  </p>
    </div>

</div>


@endsection