<?php

use Illuminate\Http\Request;
use App\Doctor;
use App\appoinment;
use App\reserv;
use App\patient;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::get('/admindoc', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);
    $doctors = doctor::all()->toArray();
    return view('admindoc',compact('doctors'));
})->name('admindoc');

Route::get('/adminDocAppoint', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);
    $appoinments = appoinment::all()->toArray();
    return view('adminDocAppoint',compact('appoinments'));
})->name('adminDocAppoint');

Route::get('/adminReserv', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);
    $reservs = reserv::all()->toArray();
    return view('adminReserv',compact('reservs'));
})->name('adminReserv');

Route::get('/adminPatient', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);
    $patients = patient::all()->toArray();
    return view('adminPatient',compact('patients'));
})->name('adminPatient');