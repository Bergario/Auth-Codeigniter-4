<?php

namespace App\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

/**
 * 
 */
class Karyawan_model extends Model
{
	protected $table = 'karyawan';
	protected $primaryKey = 'karyawan_id';
	protected $useTimestamps = true;

	protected $allowedFields = ['nama_depan', 'nama_blkg', 'alamat', 'email', 'telepon', 'jenis_kelamin', 'status', 'gambar'];

	public function getKaryawan($karyawan_id = false)
	{
		if ($karyawan_id == false) {

			return $this->findAll();
		}

		return $this->where(['karyawan_id' => $karyawan_id])->first();
	}

	public function hapusdata($karyawan_id)
	{

		return $this->db->table('karyawan')->delete(['karyawan_id' => $karyawan_id]);
	}


	public function editdata($data, $karyawan_id)
	{

		return $this->db->table('karyawan')->update($data, ['karyawan_id' => $karyawan_id]);
	}

	public function cari($keyword = false)
	{

		$builder = $this->table('karyawan');
		$builder->like('nama_depan', $keyword)->orlike('nama_blkg', $keyword);
		return $builder;
	}
}