<?php namespace App\Controllers;

class EmptyCan extends BaseController
{
	public function index()
	{
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		//echo view('superuser/widget');
		echo view('superuser/user/user');
		//echo view('superuser/order');
		//echo view('superuser/todolivechat');
		//echo view('superuser/calender');
		echo view('superuser/user/footer');
	}

}