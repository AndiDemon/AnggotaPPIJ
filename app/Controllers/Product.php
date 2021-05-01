<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_main;

class Product extends BaseController
{
	protected $M_main;
	public function __construct(){
		$this->M_main = new M_main();
		helper('form');
	}

	public function getProduct($id)
	{
		$data['item'] = $this->M_main->get_itemDetail($id);
		echo view('frontend/header');
		echo view('frontend/menu');
		echo view('frontend/single-product',$data);
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
