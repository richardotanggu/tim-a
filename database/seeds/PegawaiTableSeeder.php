<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pegawai::create([
            'nama_pegawai' => 'Saep',
            'jabatan' => 'Dokter',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Pemalang',
            'tanggal_lahir' => '2006-10-14',
            'telepon' => '8786',
            'alamat' => 'Cileungsi',
        ]);
<<<<<<< HEAD

        Pegawai::create([
            'nama_pegawai' => 'rzal',
            'jabatan' => 'admin',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '2005-10-03',
            'telepon' => '8089',
            'alamat' => 'Cicadas',
        ]);
=======
>>>>>>> 7772d8902c48b2bf1a95e0ef07aa32bf2d2a8685
    }
}
