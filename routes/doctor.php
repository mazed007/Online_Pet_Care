<?php

use Illuminate\Http\Request;
use App\appoinment;
use App\petinfo;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('doctor')->user();

    //dd($users);
    $appoinments = appoinment::all()->toArray();
    return view('doctor.home',compact('appoinments'));
})->name('home');

Route::get('/docPetInfo', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('doctor')->user();

    //dd($users);
	$petinfo = DB::table('pet_infos')
            ->join('appoinments', 'pet_infos.email', '=', 'appoinments.email')
            ->select('pet_infos.*', 'appoinments.*')
			->distinct()
            ->get();
	
    return view('docPetInfo')->with(["petinfo" => $petinfo]);
})->name('docPetInfo');
