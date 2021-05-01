<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;

class Home extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
	}

	public function super()
	{
		//$data['countUser'] = $this->M_user->get_countUser();
		
		if(session()->get('user_level_id')!=1){
			session()->setFlashdata('failed','You are not logged in !!');
			return redirect()->to(base_url('login'));
		}

		$menu = [
			'item' 	=> ['komsat', 'sekolah', 'artikel'],
		];


		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		//echo view('superuser/widget',$data);
		echo view('superuser/traffic');
		echo view('superuser/order');
		//echo view('superuser/todolivechat');
		echo view('superuser/calender');
		echo view('superuser/footer');
	}

	public function korda()
	{
		//$data['countUser'] = $this->M_user->get_countUser();
		
		if(session()->get('user_level_id')!=3){
			session()->setFlashdata('failed','You are not logged in !!');
			return redirect()->to(base_url('login'));
		}

		$menu = [
			'item' 	=> ['komsat', 'sekolah', 'artikel'],
		];

		echo view('superuser/header');
		echo view('superuser/leftPanelKorda');
		echo view('superuser/rightPanel');
		//echo view('superuser/widget',$data);
		echo view('superuser/traffic');
		echo view('superuser/order');
		//echo view('superuser/todolivechat');
		echo view('superuser/calender');
		echo view('superuser/footer');
	}

	public function komsat()
	{
		//$data['countUser'] = $this->M_user->get_countUser();
		
		if(session()->get('user_level_id')!=4){
			session()->setFlashdata('failed','You are not logged in !!');
			return redirect()->to(base_url('login'));
		}

		$menu = [
			'item' 	=> ['komsat', 'sekolah', 'artikel'],
		];

		echo view('superuser/header');
		echo view('superuser/leftPanelKomsat');
		echo view('superuser/rightPanel');
		//echo view('superuser/widget',$data);
		echo view('superuser/traffic');
		echo view('superuser/order');
		//echo view('superuser/todolivechat');
		echo view('superuser/calender');
		echo view('superuser/footer');
	}

}
