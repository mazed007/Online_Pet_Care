<?php

use Illuminate\Http\Request;
use App\Doctor;
use App\petinfo;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('patient')->user();

    //dd($users);

    return view('patient.home');
})->name('home');

Route::get('/test', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('patient')->user();

    //dd($users);
    $doctors = doctor::all()->toArray();
    return view('test',compact('doctors'));
})->name('test');

Route::get('/reservation', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('patient')->user();

    //dd($users);
   // $doctors = doctor::all()->toArray();

    return view('reservation');
})->name('reservation');

Route::get('/appoinment', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('patient')->user();

    //dd($users);
   // $doctors = doctor::all()->toArray();
    return view('appoinment');
})->name('appoinment');

Route::get('/addPetInfo', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('patient')->user();

    //dd($users);
   // $doctors = doctor::all()->toArray();
    return view('addPetInfo');
})->name('addPetInfo');

Route::get('/viewPetInfo', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('patient')->user();

    //dd($users);
    $PetInfos = petinfo::all()->toArray();
    return view('viewPetInfo',compact('PetInfos'));
})->name('viewPetInfo');

