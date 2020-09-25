<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Karyawan_model;
use App\Models\User_model;
use CodeIgniter\I18n\Time;
use CodeIgniter\CodeIgniter;
use Exception;
use PHPUnit\Util\PHP\DefaultPhpProcess;
use App\Helpers\Login;

/**
 * 
 */
class Karyawan extends BaseController
{
	protected $karyawanmodel;
	protected $session;
	protected $usermodel;

	public function __construct()
	{
		helper('Login_helper');
		$this->karyawanmodel = new Karyawan_model();
		$this->usermodel = new User_model();
		$this->session = \Config\Services::session();
		// return logged_in();
	}

	// private function _logged_in()
	// {
	// 	// $session = $this->session->get('email');

	// 	// if (!$session) {
	// 	// 	return redirect()->to("/user/login");
	// 	// } else {
	// 	// 	echo "TAI";
	// 	// }
	// 	return redirect()->to('/user/login');
	// }

	public function index()
	{
		$this->session;
		$session = $this->session->get('email');

		if (!$session) {
			return redirect()->to('../user/login');
		}
		// $karyawandata = $this->karyawanmodel->getKaryawan();
		$halaman = $this->request->getVar('page_karyawan') ? $this->request->getVar('page_karyawan') : 1;

		$keyword = $this->request->getVar('keyword');


		if ($keyword) {

			$cari = $this->karyawanmodel->cari($keyword);
		} else {

			$cari = $this->karyawanmodel;
		}

		$user = $this->usermodel->where(['email' => $this->session->get('email')])->first();

		$data = [
			'title' => 'Daftar Karyawan',
			// 'karyawan' => $karyawandata
			'karyawan' => $cari->paginate(5, 'karyawan'),
			'pager'	=> $cari->pager,
			'halaman' => $halaman,
			'data'	=> $user

		];

		echo view('karyawan/karyawan_view', $data);
	}
	public function formtambah($karyawan_id = false)
	{
		$session = $this->session->get('email');

		if (!$session) {
			return redirect()->to('../user/login');
		}

		$faker = \Faker\Factory::create('id_ID');
		$user = $this->usermodel->where(['email' => $this->session->get('email')])->first();
		session();

		$karyawan = [
			'data'	=> $user,
			'validation' => \Config\Services::validation(),
			'kk' => 'tambah',
			'tombol' => 'simpan',
			'aksi' => 'simpandata',
			'karyawan' => [
				'karyawan_id' => '',
				'nama_depan' => '',
				'nama_blkg' => '',
				'alamat' => '',
				'email' => '',
				'telepon' => '',
				'status' => '',
				'jenis_kelamin' => '',
				'gambar'	=> 'default.png',
				'created_at'		=> Time::createFromTimestamp($faker->unixTime()),
				'updated_at'	=> Time::now()
			]
		];



		$ambildata = $this->karyawanmodel->getKaryawan($karyawan_id);

		if ($karyawan_id) {

			$data = [
				'data'	=> $user,
				'karyawan' => $ambildata
			];

			$data['tombol'] = "Simpan Edit";
			$data['kk'] = "Edit";
			$data['aksi'] = "updatedata";
			$data['validation'] = \Config\Services::validation();



			echo View('karyawan/formtambah_view', $data);
		} else echo View('karyawan/formtambah_view', $karyawan);
	}

	public function simpandata()
	{
		// dd($this->request->getVar());
		//validasi
		if (!$this->validate([
			'nama_depan' => [
				'rules' => 'required[nama_depan]',
				'errors' => [
					'required' => 'Nama harus di isi.'
				]
			],
			'email' => [
				'rules' => 'required|is_unique[karyawan.email]',
				'errors' => [
					'required' => 'Email harus di isi.',
					'is_unique' => 'Email sudah terdaftar.'
				]
			],
			'gambar' => [
				'rules'	=> 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => 'file terlalu besar',
					'is_image' => 'yang anda pilih bukan file gambar',
					'mime_in' => 'yang anda pilih bukan file gambar'
				]
			]
		])) {

			// $validation = \Config\Services::validation();

			return redirect()->to('/karyawan/formtambah')->withInput();
		}
		//ambil file gambar
		$filegambar = $this->request->getFile('gambar');

		if ($filegambar->getError() == 4) {

			$namagambar = 'default.png';
		} else {

			//generate nama gambar random
			$namagambar = $filegambar->getRandomName();
			// pindah gmbr ke foler img
			$filegambar->move('img', $namagambar);
		}

		$simpan = $this->karyawanmodel->save([
			'nama_depan' => $this->request->getVar('nama_depan'),
			'nama_blkg' => $this->request->getVar('nama_blkg'),
			'alamat' => $this->request->getVar('alamat'),
			'email' => $this->request->getVar('email'),
			'telepon' => $this->request->getVar('telp'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'status' => $this->request->getVar('status'),
			'created_at' => $this->request->getVar('created_at'),
			'update_at' => $this->request->getVar('created_at'),
			'status' => $this->request->getVar('status'),
			'gambar' => $namagambar
		]);
		if ($simpan) {

			session()->setFlashdata('pesan', 'Data Berhasil ditambah.');
			return redirect()->to('/karyawan/');
		} else {
			echo View('formtambah_view');
		}
	}

	public function hapus($karyawan_id)
	{
		$row = $this->karyawanmodel->find($karyawan_id);

		if ($row['gambar'] != 'default.png') {

			// hapus file gambar
			unlink('img/' . $row['gambar']);
		}

		$this->karyawanmodel->delete($karyawan_id);

		session()->setFlashdata('pesan', 'Data Berhasil dihapus.');

		return redirect()->to('/karyawan/');
	}

	public function updatedata($karyawan_id)
	{
		$row = $this->karyawanmodel->getKaryawan($karyawan_id);

		if ($row['email'] == $this->request->getVar('email')) {

			$rule_email = 'required';
		} else {
			$rule_email = 'required|is_unique[karyawan.email]';
		}
		//validasi
		if (!$this->validate([
			'nama_depan' => [
				'rules' => 'required[nama_depan]',
				'errors' => [
					'required' => 'Nama harus di isi.'
				]
			],
			'email' => [
				'rules' => $rule_email,
				'errors' => [
					'required' => 'Email harus di isi.',
					'is_unique' => 'Email sudah terdaftar.'
				]
			],
			'gambar' => [
				'rules'	=> 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => 'file terlalu besar',
					'is_image' => 'yang anda pilih bukan file gambar',
					'mime_in' => 'yang anda pilih bukan file gambar'
				]
			]
		])) {
			$validation = \Config\Services::validation();

			return redirect()->to('/karyawan/formtambah/' . $karyawan_id . '')->withInput();
		}

		$filegambar = $this->request->getFile('gambar');

		if ($filegambar->getError() == 4) {
			$row = $this->karyawanmodel->getKaryawan($karyawan_id);
			$namagambar = $row['gambar'];
		} else {

			//generate nama gambar random
			$namagambar = $filegambar->getRandomName();

			// pindah gmbr ke foler img
			$filegambar->move('img', $namagambar);

			if ($this->request->getVar('gambar_lama') != 'default.png') {

				//hapus file lama
				unlink('img/' . $this->request->getVar('gambar_lama'));
			}
		}


		$this->karyawanmodel->save([
			'karyawan_id' => $karyawan_id,
			'nama_depan' => $this->request->getVar('nama_depan'),
			'nama_blkg' => $this->request->getVar('nama_blkg'),
			'alamat' => $this->request->getVar('alamat'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'email' => $this->request->getVar('email'),
			'telepon' => $this->request->getVar('telp'),
			'created_at' => '',
			'updated_at' => $this->request->getVar('update_at'),
			'status' => $this->request->getVar('status'),
			'gambar' => $namagambar
		]);

		session()->setFlashdata('pesan', 'Data Berhasil diubah.');

		return redirect()->to('/karyawan/' . $karyawan_id);
	}

	public function detail($karyawan_id)
	{
		$session = $this->session->get('email');

		if (!$session) {
			return redirect()->to('../user/login');
		}

		if ($this->session->get('email')) {
			$user = $this->usermodel->where(['email' => $this->session->get('email')])->first();

			$karyawan = $this->karyawanmodel->getKaryawan($karyawan_id);

			$data = [
				'karyawan' => $karyawan,
				'title' => 'Detail Karyawan',
				'data'	=> $user
			];

			if (empty($data['karyawan'])) {
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Karyawan tidak ditemukan');
			}

			return view('karyawan/karyawan_detail', $data);
		}
		return redirect()->to('../user/login');
	}
}
