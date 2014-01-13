<?php

class PageController extends \BaseController {

	public function index()
	{
		return View::make('pages.index');
	}

	public function about()
	{
		return View::make('pages.about');
	}

	public function faqs()
	{
		return View::make('pages.faq');
	}


	public function feedback()
	{
		return View::make('pages.feedback');
	}


	public function contact()
	{
		return View::make('pages.contact');
	}


}