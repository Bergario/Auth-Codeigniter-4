<?php

namespace App\Models;

use CodeIgniter\Model;

class Absensi_model extends Model
{


    public function getAbsensi($karyawan_id = false)
    {
        if ($karyawan_id) {

            $this->karyawanmodel->where(['karyawan_id' => $karyawan_id])->first();
        }

        $this->karyawanmodel->findAll();
    }
}