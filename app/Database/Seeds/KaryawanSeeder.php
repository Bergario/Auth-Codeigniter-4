<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;


class KaryawanSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 50; $i++) {

            $data = [
                'nama_depan'    => $faker->firstName,
                'nama_blkg'     => $faker->firstName,
                'alamat'        => $faker->address,
                'telepon'       => $faker->phoneNumber,
                'jenis_kelamin' => '',
                'email'         => $faker->email,
                'dibuat'        => Time::createFromTimestamp($faker->unixTime()),
                'diganti'       => Time::now(),
                'status'        => 'on'
            ];
            $this->db->table('karyawan')->insert($data);
        }
        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO users (username, email) VALUES(:username:, :email:)",
        //     $data
        // );

        // Using Query Builder
    }
}