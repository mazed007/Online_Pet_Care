<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use Mail;
use App\mail\SendMail;

class PageController extends Controller
{
    public function welcome(){
		return view('welcome');
	}

	 public function contact(){
		return view('contact');
	}

	public function tips(){
		return view('tips');
	}

public function emergency(){
		return view('emergency');
	}


	public function search(Request $request){
	$search_txt = $request->search;
	$doctors=doctor::orderBy('id','desc')
	->where('name','like','%'.$search_txt.'%')
	->orwhere('address','like','%'.$search_txt.'%')
	->get();
		return view('search')->with(["doctors" => $doctors]);
	}

	 public function send()
	{
	Mail::send(new sendMail());
	echo "send mail successfuly";
	}
}