<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;
use App\Models\M_login;

class Login extends BaseController
{
	protected $M_user;
	protected $M_login;
	public function __construct(){
		$this->M_user = new M_user();
		$this->M_login = new M_login();
	}

	public function index()
	{
		//$data['countUser'] = $this->M_user->get_countUser();
		
		echo view('front/header');
		echo view('front/login');
		echo view('front/footer');
		
	}

	public function check(){
		$username = $this->request->getPost('username');
		$password = md5($this->request->getPost('pass'));

		$check = $this->M_login->check($username,$password);

		if($check==null){
			session()->setFlashdata('failed','Login failed! Username or password is wrong');
			return redirect()->to(base_url('login'));
		}else if(($check['account_name']==$username) && ($check['account_password']==$password)){
			session()->set('id',$check['account_id']);
			session()->set('username',$check['account_name']);
			session()->set('user_level_id',$check['user_level_id']);

			if ($check['user_level_id']==1){
				return redirect()->to(base_url('home/super'));
			} else if ($check['user_level_id']==3){
				return redirect()->to(base_url('home/korda'));
			} else if ($check['user_level_id']==4){
				return redirect()->to(base_url('home/komsat'));
			} else if ($check['user_level_id']==5){
				return redirect()->to(base_url('account/info'));
			} else if ($check['user_level_id']==6){
				return redirect()->to(base_url('home/alumni'));
			} else if ($check['user_level_id']==7){
				return redirect()->to(base_url('home/atdikbud'));
			}else {
				session()->setFlashdata('failed','Your account is unverified, create an account first!');
				return redirect()->to(base_url('login/en'));
			}
		} else {
			session()->setFlashdata('failed','Login failed! Username or password is wrong');
			return redirect()->to(base_url('login'));
		}
	}

	public function logout(){
		session()->setTempdata('id');
		session()->setTempdata('username');
		session()->setTempdata('user_level_id');
		return redirect()->to(base_url('front'));
	}


	private function generateID(){
		$id = rand(1,9999);
		$idx = '';
		if ($id <= 9){ $idx='000'.$id; }
		elseif ($id > 9 && $id<=99) { $idx='00'.$id; }
		elseif ($id > 99 && $id<=999) { $idx='0'.$id; }
		elseif ($id > 999 && $id<=9999) { $idx=''.$id; }
		
		//check to database
		$checkID = $this->M_user->getID($idx);
		if ($checkID!=null){
			$this->generateID();
		} else{ echo "success";}

		return $idx;
	}

	public function signup(){
		echo('masuk di sign up');
		$id = $this->generateID();
		$data=[
			'account_id' => 'acc'.$id,
			'user_id' => 'usr'.$id,
			'account_name' => $this->request->getPost('username'),
			'email' => $this->request->getPost('email'),
			'password' => md5($this->request->getPost('pass')),
			'repassword' => md5($this->request->getPost('repass')),
			'user_level_id' => 5,
		];

		// echo($data['account_id']);
		// echo($data['user_id']);
		// echo($data['account_name']);
		// echo($data['email']);
		// echo($data['password']);
		// echo($data['user_level_id']);
		

		//name validation
		$checkName = $this->M_user->getName($data['account_name']);
		if ($checkName!=null){
			session()->set('error','Hmm! it looks like someone has taken that name');
			return redirect()->to(base_url('front'));
		}

		//password validation
		if ($data['password']!=$data['repassword']){
			session()->set('error','The password you input does not match');
			return redirect()->to(base_url('front'));
		} 

		$account["account_id"] = $data['account_id'];
		$account["account_name"] = $data['account_name'];
		$account["account_password"] = $data['password'];
		$account["user_level_id"] = $data['user_level_id'];

		$user = [
			'member_id' => $data['user_id'],
			'fullname' => "",
			'email' => $data['email'],
			'contact' => "",
			'emergency_jp' => "",
			'emergency_id' => "",
			'address_jp' => "",
			'address_id' => "",
			'avatar' => "default.png",
			'description' => "",
			'afiliasi_id' => "0",
			'account_id' => $data['account_id'],
			];

		$this->M_user->insertAccount($account);
		$this->M_user->insertUser($user);

		// echo('name');
		// echo($this->request->getPost('username'));
		session()->set('id',$data['account_id']);
		session()->set('username',$data['account_name']);
		session()->set('user_level_id',$data['user_level_id']);

		return redirect()->to(base_url('account/info'));
	}

}
