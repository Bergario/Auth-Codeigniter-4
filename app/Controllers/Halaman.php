<?php

namespace App\Controllers;

use App\Models\User_model;

class Halaman extends BaseController

{
	protected $usermodel;
	protected $session;

	public function __construct()
	{
		$this->usermodel = new User_model;
		$this->session = \Config\Services::session();
	}

	public function sbb()
	{
		return View('landing_page/page');
	}

	public function Admin()
	{
		$this->session;
		$email = $this->session->get('email');
		if ($this->session->get('email')) {

			$user = $this->usermodel->where(['email' => $email])->first();

			$data = [
				'data' => $user
			];

			return View('/admin/admin_view', $data);
		}
		return redirect()->to('../user/login');
	}

	public function user()
	{
		$this->session;
		$email = $this->session->get('email');
		if ($this->session->get('email')) {

			$user = $this->usermodel->where(['email' => $email])->first();

			$data = [
				'data' => $user
			];

			return View('/user/user_view', $data);
		}
		return redirect()->to('../user/login');
	}

	public function profil()
	{
		$session = $this->session->get('email');

		if ($session) {
			$user =	$this->usermodel->where(['email' => $this->session->get('email')])->first();
			$data = [
				'data' => $user
			];
			return View('admin/profil_view', $data);
		}
		return redirect()->to('../user/login');
	}
}