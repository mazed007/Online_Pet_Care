@extends('layouts.master')
	
@section('content')
<div class="emergency">
<div class='container margin-top-20'>
<div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">Pet Hospitals List in Dhaka</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Ambulance Service</a>
 <!-- <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>-->
</div> 
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
  <br>
  <h4 id="list-item-1"><u>Pet Hospitals List in Dhaka</u></h4>
  	<p><h6>District Veterinary Hospital</h6>
	Keshab Benarjee Rd, Dhaka, Bangladesh</p>
	<p><h6>Central Veterinary Hospital</h6>
	Kazi Allaudin Rd, Dhaka 1000, Bangladesh<br>
	Phone:+880 1711-187477</p>
	<p><h6>Fatema Manjeel Animal Hospital</h6>
	Kathal Bagan Sonargaon Road, Dhaka 1205, Bangladesh<br>
	Phone: +880 1720-118383</p>
	<p><h6>Dr. Sagir's Pet Clinic</h6>
	Dhanmondi Address: House 3/2, Block D, Lalmatia Dhaka 1207, Bangladesh<br>
	Gulshan Address: House # 21, Road # 6, Block # D, Niketon, Gulshan 1, Dhaka<br>
	Phone for serial: 01752987436, 01706214759</p>

  <h4 id="list-item-2"><u>Ambulance Service</u></h4>
  <p><h6>Dr. Sagir's Ambulance</h6>
   Address: 76/A, Ahmed Plaza, West Panthapath, Bir Uttam Kazi Nuruzzaman Rd, Dhaka 1215<br>
   Phone: 01713-205555</p>
   <p><h6>Alif Ambulance Service</h6>
   Address: House # 3/2 Block No. D, Dhaka 1207<br>
   Phone: 01912-251312</p>
   <p><h6>Desh Ambulance Service</h6>
   Address: 82 East Ahmed Nagor, Dhaka 1216<br>
   Phone: 01790-509607</p>
  <h4 id="list-item-3"></h4>
  <p>...</p>
  <h4 id="list-item-4"></h4>
  <p>...</p>
</div>
</div>
</div>
@endsection