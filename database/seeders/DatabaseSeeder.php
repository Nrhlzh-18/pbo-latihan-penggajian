<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;
use App\Models\Jabatan;
use App\Models\Gaji;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create([
            'nama_karyawan' => "Nurhalizah",
            'alamat'        => "Kp.Batu Gede RT.04/RW.07",
            'no_telepon'    => "0893485",
            'tempat_lahir'  => "Bogor",
            'tanggal_lahir' => "2006-06-18",
            'jenis_kelamin' => "Perempuan",
            'status'        => "Aktif",
            'jumlah_anak'   => 0,
            'username'      => "halizahn",
            'password'      => "123",
            'id_jabatan'    => "1"
        ]);

        Jabatan::create([
            'nama_jabatan'  => "Developer",
            'jumlah_gaji_pokok'  => 5000000,
            'upah_lembur'   => 50000,
        ]);
    }
}
