<?php

namespace App\Controllers;

use App\Models\Karyawan_model;
use App\Models\Absensi_model;

class Absensi extends BaseController
{
    protected $absensimodel;
    protected $karyawanmodel;

    public function __construct()
    {
        $this->absensimodel = new Absensi_model();
        $this->karyawanmodel = new Karyawan_model();
    }
    public function index()
    {


        $ambildata = $this->karyawanmodel->getKaryawan();

        $data = [
            'karyawan'  => $ambildata,
            'data' => [
                'role' => "",
                'nama' => ""
            ]
        ];


        return View('absensi/absensi_view', $data);
    }
}