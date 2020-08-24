<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_main;

class Main extends BaseController
{
	protected $M_main;
	public function __construct(){
		$this->M_main = new M_main();
		helper('form');
	}
	public function index()
	{
		$data['item'] = $this->M_main->get_item();
		
		echo view('frontend/header');
		echo view('frontend/menu');
		echo view('frontend/main-open');
		echo view('frontend/banner');
		//echo view('frontend/carousel');
		echo view('frontend/trending',$data);
		//echo view('frontend/offer');
		//echo view('frontend/best');
		//echo view('frontend/blog-section');
		echo view('frontend/subscribe');
		echo view('frontend/main-close');
		echo view('frontend/footer');
		
	}

}