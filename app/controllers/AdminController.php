<?php

class AdminController extends \BaseController {
	public function __construct(){
		$this->beforeFilter('auth');
	}
	

	public function requests(){
		return View::make('admin.request');
	}

	public function setting(){
		return View::make('admin.setting');
	}


	public function profile(){
		$donor = Donor::find(Auth::user()->id);
		return View::make('admin.profile',compact('donor'));
	}

	public function Showprofile($id){
		return View::make('admin.Showprofile',compact('id'));
	}
}
