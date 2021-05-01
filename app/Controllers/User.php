<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;


class User extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
		
	}

	public function index(){

		$data = [
					'user' => $this->M_user->get_user(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/user/user',$data);
		echo view('superuser/footer-table');
	}

	public function create($send=['warning'=>'','account_name'=>'','email' =>'','password' => '','repassword' => '','contact' => '','address' => '','user_level_id' => 0]){
		$user_level = $this->M_user->get_user_level();
		$data['user_level'] = $user_level;
		$data['send'] = $send;
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/user/create',$data);
		echo view('superuser/footer-table');
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

	public function save(){
		$id = $this->generateID();
		$data = [
				'account_id' => 'acc'.$id,
				'user_id' => 'usr'.$id,
				'account_name' => $this->request->getPost('account_name'),
				'email' => $this->request->getPost('email'),
				'password' => md5($this->request->getPost('password')),
				'repassword' => md5($this->request->getPost('repassword')),
				'contact' => $this->request->getPost('contact'),
				'address' => $this->request->getPost('address'),
				'user_level_id' => $this->request->getPost('level_user'),
		];

		//user level validation
		if ($data['user_level_id']==0){
			$send = [
						'warning' => 'Please select the user level!',
						'account_name' => $data['account_name'],
						'email' => $data['email'],
						'password' => $data['password'],
						'repassword' => $data['repassword'],
						'contact' => $data['contact'],
						'address' => $data['address'],
						'user_level_id' => $data['user_level_id'],
				];
			$this->create($send);
		}

		//name validation
		$checkName = $this->M_user->getName($data['account_name']);
		if ($checkName!=null){
			$send = [
						'warning' => 'Sorry, the username has been taken!',
						'account_name' => $data['account_name'],
						'email' => $data['email'],
						'password' => $data['password'],
						'repassword' => $data['repassword'],
						'contact' => $data['contact'],
						'address' => $data['address'],
						'user_level_id' => $data['user_level_id'],
				];
			$this->create($send);
		}

		//password validation
		if ($data['password']!=$data['repassword']){
			$send = [
						'warning' => 'The input password are not the same!',
						'account_name' => $data['account_name'],
						'email' => $data['email'],
						'password' => $data['password'],
						'repassword' => $data['repassword'],
						'contact' => $data['contact'],
						'address' => $data['address'],
						'user_level_id' => $data['user_level_id'],
				];
			$this->create($send);
		} 

		$account["account_id"] = $data["account_id"];
		$account["account_name"] = $data["account_name"];
		$account["account_password"] = $data["password"];
		$account["user_level_id"] = $data["user_level_id"];

		$user["user_id"] = $data["user_id"];
		$user["email"] = $data["email"];
		$user["contact"] = $data["contact"];
		$user["address"] = $data["address"];
		$user["account_id"] = $data["account_id"];

		$this->M_user->insertAccount($account);
		$this->M_user->insertUser($user);

		return redirect()->to(base_url('user'));
	}

	public function edit($name, $send=['warning'=>'']){
		$user = $this->M_user->get_userWhere($name);

		$user_level = $this->M_user->get_user_level();
		$data['user_level'] = $user_level;
		$data['user'] = $user[0];
		$data['send'] = $send;

		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/user/edit',$data);
		echo view('superuser/footer-table');
	}

	public function update($name){
		$data = [
				'user_id' => $this->request->getPost('user_id'),
				'email' => $this->request->getPost('email'),
				'account_name' => $this->request->getPost('account_name'),
				'password' => md5($this->request->getPost('password')),
				'repassword' => md5($this->request->getPost('repassword')),
				'contact' => $this->request->getPost('contact'),
				'address' => $this->request->getPost('address'),
				'user_level_id' => $this->request->getPost('level_user'),
		];

		//password validation
		//check the password if the password and repassword empty don't update password
		$user = $this->M_user->get_userWhere($name);
		if ($data['password']=='d41d8cd98f00b204e9800998ecf8427e'){
			$data['password'] == $user[0]['account_password'];
			
		} else {
			if ($data['password']!=$data['repassword']){
				$send = [
							'warning' => 'The input password are not the same!',
						];
				$this->edit($name,$send);
			} else{

			}
		}

		$account = [
					'account_name' => $data['account_name'],
					'account_password' => $data['password'],
					'user_level_id' => $data['user_level_id'],
				];
		$user = [	
					'email' => $data['email'],
					'contact' => $data['contact'],
					'address' => $data['address'],
				];
		$this->M_user->updateAccount($account,$name);
		$this->M_user->updateUser($user,$data['user_id']);
		return redirect()->to(base_url('user'));
	}

	public function delete($name){
		$user = $this->M_user->get_userWhere($name);
		$this->M_user->deleteAccount($user[0]['account_id']);
		$this->M_user->deleteUser($user[0]['user_id']);
		return redirect()->to(base_url('user'));
	}

}
