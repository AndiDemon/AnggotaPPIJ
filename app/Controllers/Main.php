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
		$title = $this->request->uri;
		$title = explode("/", $title);
		$header['title'] = $title[3];
		
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

	public function en()
	{
		$header['categories'] = $this->M_main->get_categories();
		$info['item'] = $this->M_main->get_item();
		$container['dueitem'] = $this->M_main->get_itemExpiredSoon();

		$title = $this->request->uri;
		$title = explode("/", $title);
		$header['title'] = $title[3];

		echo view('en/header',$header);
		echo view('en/class_container');
		echo view('en/banner');
		echo view('en/info',$info);
		echo view('en/closed_div');
		echo view('en/container',$container);
		//echo view('en/cm');
		//echo view('en/top');
		echo view('en/footer',$header);
	}

}