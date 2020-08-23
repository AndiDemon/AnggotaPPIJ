<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		
		echo view('frontend/header');
		echo view('frontend/menu');
		echo view('frontend/banner');
		echo view('frontend/carousel');
		echo view('frontend/trending');
		echo view('frontend/offer');
		echo view('frontend/best');
		echo view('frontend/blog-section');
		echo view('frontend/subscribe');
		echo view('frontend/footer');
		
	}

}