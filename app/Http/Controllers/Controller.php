<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

      function reserv(Request $req)
	{
		$pet_type = $req->input('pet_type');
		$phone_number = $req->input('phone_number');
		$address = $req->input('address');
		$email = $req->input('email');
		$start_day = $req->input('start_day');
		$end_day = $req->input('end_day');
		
		$data = array('pet_type'=>$pet_type,'phone_number'=>$phone_number,'address'=>$address,'email'=>$email,'start_day'=>$start_day,'end_day'=>$end_day);
		
		DB::table('reservs')->insert($data);

		 echo "done";
		 //return Redirect::to('/patient.home');
		 return view('reservation');
		 	}
		 	

	 function appoinment(Request $req)
	{
		$pet_type = $req->input('pet_type');
		$pet_diseases = $req->input('pet_diseases');
		$doctor_name = $req->input('doctor_name');
		$phone_number = $req->input('phone_number');
		$address = $req->input('address');
		$email = $req->input('email');
		
		$data = array('pet_type'=>$pet_type,'pet_diseases'=>$pet_diseases,'doctor_name'=>$doctor_name,'phone_number'=>$phone_number,'address'=>$address,'email'=>$email);
		
		DB::table('appoinments')->insert($data);
		 echo "done";
		 	return view('appoinment');
		 	}

	function addPetInfo(Request $req)
	{
		$image = $req->input('image');
		$pet_type = $req->input('pet_type');
		$pet_name = $req->input('pet_name');
		$pet_owner_name = $req->input('pet_owner_name');
		$email = $req->input('email');
		
		$data = array('image'=>$image,'pet_type'=>$pet_type,'pet_name'=>$pet_name,'pet_owner_name'=>$pet_owner_name,'email'=>$email);
		
		DB::table('pet_infos')->insert($data);
		 echo "done";
		 	//return view('appoinment');
		 	}


		function deleteDoc($id)
	{
		DB::table('doctors')->where('id',$id)->delete();
		//return redirect('admindoc');
		echo "done";
	}

	function deleteAppoint($id)
	{
		DB::table('appoinments')->where('id',$id)->delete();
		//return redirect('admindoc');
		echo "done";
	}

	function deleteReserv($id)
	{
		DB::table('reservs')->where('id',$id)->delete();
		//return redirect('admindoc');

	}

	function deletePatient($id)
	{
		DB::table('patients')->where('id',$id)->delete();
		//return redirect('admindoc');

	}
}
