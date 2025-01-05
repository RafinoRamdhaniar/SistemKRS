<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $tahun = ['2020', '2021', '2022', '2023', '2024']; // Tahun yang diperbolehkan
        $urut = 1; // Counter NIM untuk urutan

        for ($i = 0; $i < 15; $i++) {
            $tahun_terpilih = $tahun[array_rand($tahun)]; // Pilih tahun secara acak
            $data = [
                'nim' => sprintf('A11.%s.%04d', $tahun_terpilih, $urut++), 
                'nama' => $faker->name,
                'ipk' => $faker->randomFloat(2, 2.0, 4.0), // IPK antara 2.0 hingga 4.0
                'sks_diambil' => $faker->numberBetween(10, 24), // SKS diambil antara 10 hingga 24
                'password' => password_hash('1234567', PASSWORD_DEFAULT), // Default password
            ];

            print_r($data); // Untuk debug di terminal
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}