<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;

class Account extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
	}

	public function info(){
		//$data['countUser'] = $this->M_user->get_countUser();
		
		if(session()->get('user_level_id')!=5){
			session()->setFlashdata('failed','You are not logged in !!');
			return redirect()->to(base_url('login'));
		}

		$data['user'] = $this->M_user->get_memberWhere(session()->get('id'));
		$data['afiliasi'] = $this->M_user->get_afiliasi($data['user'][0]['afiliasi_id']);
		$data['korda'] = $this->M_user->get_korda();
		$data['prefecture'] = $this->M_user->get_prefecture();

		echo view('front/header');
		echo view('front/navigation-account');
		echo view('front/account-profile',$data);
		echo view('front/account-profile-full',$data);
		echo view('front/footer');
	}

	public function updateMember(){
		$prefecture=[
			'prefecture_id' => $this->request->getPost('prefecture')
			];

		$data=[
			'member_id' => $this->request->getPost('member_id'),
			'fullname' => $this->request->getPost('fullname'),
			'birthdate' => $this->request->getPost('birthdate'),
			'contact' => $this->request->getPost('contact'),
			'emergency_jp' => $this->request->getPost('emergency_jp'),
			'emergency_id' => $this->request->getPost('emergency_id'),
			'address_jp' => $this->request->getPost('address_jp'),
			'address_id' => $this->request->getPost('address_id'),
			'avatar' => $this->request->getPost('avatar'),
			'description' => $this->request->getPost('description'),
		];

		//var_dump($data);
		$this->M_user->updateMember($data);
		return redirect()->to(base_url('account/info'));
	}

	public function getkomsat(){
		$idKorda = $this->input->post('id');
		$data = $this->M_user->get_komsat($idKorda);
		$output = '<option value="">--Pilih Komsat-- </option>';
        foreach ($data as $row) {
           $output .= '<option value="' . $row->komsat_id . '"> ' . $row->komsat_name . '</option>';
        }
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
}


//C{EjRjQo=X%S