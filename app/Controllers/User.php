<?php

namespace App\Controllers;

use App\Models\User_model;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

//use App\Models\UserKaryawan_model;
class User extends BaseController
{
	protected $usermodel;
	protected $session;


	public function __construct()
	{
		$this->usermodel = new User_model();
		$this->session = \Config\Services::session();
	}

	public function registration()
	{
		session();

		$data = [
			'validation' => \Config\Services::validation(),
			'judul' => 'Registration'
		];

		return View('register', $data);
	}

	// proses register

	public function proses_register()
	{

		//validasi
		if (!$this->validate([
			'nama' => [
				'rules' => 'required[admin.nama]',
				'errors' => [
					'required' => 'Nama harus di isi.'
				]
			],
			'email' => [
				'rules' => 'required|valid_email|is_unique[admin.email]',
				'errors' => [
					'required' => 'Email harus di isi.',
					'is_unique' => 'Email sudah terdaftar'
				]
			],
			'password1' => [
				'rules' => 'required[admin.password1]|min_length[3]',
				'errors' => [
					'required' => 'Password harus di isi.',
					'min_length' => 'Password too short!'
				]
			],
			'password2' => [
				'rules' => 'required[admin.password2]|matches[password1]',
				'errors' => [
					'required' => 'Password harus di isi.',
					'matches' => 'Password do not match!'
				]
			]

		])) {
			$validation = \Config\Services::validation();

			return redirect()->to('/user/registration')->withInput();
		}
		dd($this->request->getVar());

		$this->usermodel->save([
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'password' => password_hash($this->request->getVar('password1'), PASSWORD_DEFAULT),
			'role' => 'user'

		]);
		session()->setFlashdata('pesan', 'You has been registered. Please login');

		return redirect()->to('/user/login');
	}

	public function login()
	{

		session();
		$data = [
			'validation' =>	\Config\Services::validation(),
			'judul' => 'Login'
		];

		echo View('login', $data);
	}

	public function proses_login()
	{

		$this->session;

		// validasi
		if (!$this->validate([
			'email' => [
				'rules' => 'required|valid_email[admin.email]',
				'errors' => [
					'required' 		=> 'Isi email terlebih dahulu.',
					'valid_email' 	=> 'Email tidak valid.'
				]

			],
			'password' => [
				'rules' 	=> 'required[admin.password]',
				'errors'		=> [
					'required' => 'Masukkan password.'
				]

			]
		])) {
			$validation = \Config\Services::validation();

			return redirect()->to('/user/login')->withInput();
		}
		// jika lolos validasi
		return $this->_login();
	}

	private function _login()
	{

		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');

		$user = $this->usermodel->where(['email' => $email])->first();

		// dd($user);

		if ($user) {
			//jika ada user
			if (password_verify($password, $user['password'])) {
				if ($user['role'] == 'admin') {

					$data = [
						'role' => $user['role'],
						'email' => $user['email']
					];

					$this->session->set($data);

					return redirect()->to('../halaman/admin');
				} else {
					$data = [

						'email' => $user['email']
					];

					$this->session->set($data);

					return redirect()->to('../halaman/user');
				}
			} else {

				$this->session->setFlashdata('error', 'Wrong password!');
			}
		} else
			//user tidak ada
			session()->setFlashdata('error', 'User tidak terdaftar.');

		return redirect()->to('../user/login');
	}

	public function logout()
	{
		unset($_SESSION['email']);
		unset($_SESSION['role']);

		session()->setFlashdata('pesan', 'You have been logout.');

		return redirect()->to('../user/login');
	}
}
