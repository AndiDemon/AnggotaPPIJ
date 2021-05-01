<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_main;


class Finditem extends BaseController
{
	protected $M_main;
	public function __construct(){
		$this->M_main = new M_main();
	}
	public function index()
	{
		$data['item'] = $this->M_main->get_find();
		$data['category'] = $this->M_main->get_category();
		
		echo view('frontend/header');
		echo view('frontend/menu');
		echo view('frontend/category',$data);
		//echo view('frontend/banner');
		//echo view('frontend/carousel');
		//echo view('frontend/trending');
		//echo view('frontend/offer');
		//echo view('frontend/best');
		//echo view('frontend/blog-section');
		//echo view('frontend/subscribe');
		echo view('frontend/footer');
		
	}
}
