<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Mahasiswa 2023 (Semester 2)
            ['kode' => 'A11.64201', 'nama' => 'Matriks dan Ruang Vektor', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2023, 'semester' => 2, 'peminatan' => null],
            ['kode' => 'A11.64202', 'nama' => 'Organisasi dan Arsitektur Komputer', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2023, 'semester' => 2, 'peminatan' => null],
            ['kode' => 'A11.64203', 'nama' => 'Matematika Diskrit', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2023, 'semester' => 2, 'peminatan' => null],
            ['kode' => 'A11.64204', 'nama' => 'Algoritma dan Struktur Data', 'teori' => 2, 'praktikum' => 2, 'angkatan' => 2023, 'semester' => 2, 'peminatan' => null],
            ['kode' => 'A11.64205', 'nama' => 'Interaksi Manusia dan Komputer', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2023, 'semester' => 2, 'peminatan' => null],
            ['kode' => 'N201707', 'nama' => 'Pendidikan Pancasila', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2023, 'semester' => 2, 'peminatan' => null],
            ['kode' => 'U201701', 'nama' => 'Dasar Kewirausahaan', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2023, 'semester' => 2, 'peminatan' => null],

            // Mahasiswa 2022 (Semester 4)
            ['kode' => 'A11.64401', 'nama' => 'Otomata dan Teori Bahasa', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2022, 'semester' => 4, 'peminatan' => null],
            ['kode' => 'A11.64402', 'nama' => 'Jaringan Komputer', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2022, 'semester' => 4, 'peminatan' => null],
            ['kode' => 'A11.64403', 'nama' => 'Pemrograman Berorientasi Objek', 'teori' => 2, 'praktikum' => 2, 'angkatan' => 2022, 'semester' => 4, 'peminatan' => null],
            ['kode' => 'A11.64404', 'nama' => 'Pemrograman Web Lanjut', 'teori' => 2, 'praktikum' => 2, 'angkatan' => 2022, 'semester' => 4, 'peminatan' => null],
            ['kode' => 'A11.64405', 'nama' => 'Pembelajaran Mesin', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2022, 'semester' => 4, 'peminatan' => null],
            ['kode' => 'A11.64406', 'nama' => 'Sistem Basis Data', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2022, 'semester' => 4, 'peminatan' => null],
            ['kode' => 'A11.64407', 'nama' => 'Rangkaian Logika Digital', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2022, 'semester' => 4, 'peminatan' => null],
            
            // Mahasiswa 2021 (Semester 6)
            ['kode' => 'A11.64601', 'nama' => 'Komputasi Numerik', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => null],
            ['kode' => 'A11.64602', 'nama' => 'Pengembangan Startup Digital', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => null],
            ['kode' => 'N201702', 'nama' => 'Bahasa inggris', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => null],
            ['kode' => 'AF201702', 'nama' => 'Literasi Informasi', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => null],
             
            // Mahasiswa 2020 (Semester 8)
            ['kode' => 'A11.64701', 'nama' => 'Kerja Praktek', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2020, 'semester' => 8, 'min_sks' => 100, 'peminatan' => null],
            ['kode' => 'A11.64702', 'nama' => 'Bengkel Koding', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2020, 'semester' => 8, 'min_sks' => 100, 'peminatan' => null],
            ['kode' => 'A11.64703', 'nama' => 'Metodologi Penelitian', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2020, 'semester' => 8, 'min_sks' => 100, 'peminatan' => null],
            ['kode' => 'A11.64704', 'nama' => 'Tugas Akhir 1', 'teori' => 2, 'praktikum' => 0, 'angkatan' => 2020, 'semester' => 8, 'min_sks' => 110, 'peminatan' => null],
            ['kode' => 'A11.64801', 'nama' => 'Bimbingan Karir', 'teori' => 4, 'praktikum' => 0, 'angkatan' => 2020, 'semester' => 8, 'min_sks' => 110, 'peminatan' => null],
            ['kode' => 'A11.64803', 'nama' => 'Tugas Akhir 2', 'teori' => 4, 'praktikum' => 0, 'angkatan' => 2020, 'semester' => 8, 'min_sks' => 125, 'peminatan' => null],
            
            // Mata kuliah peminatan RPLD
            ['kode' => 'A11.64603', 'nama' => 'Rekayasa Kebutuhan Perangkat Lunak', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'RPLD'],
            ['kode' => 'A11.64604', 'nama' => 'Analisis dan Perancangan Berorientasi Objek', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'RPLD'],
            ['kode' => 'A11.64706', 'nama' => 'Pemrograman Sisi Klien', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'RPLD'],
            ['kode' => 'A11.64707', 'nama' => 'Pemrograman Sisi Server', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'RPLD'],

            // Mata Kuliah peminatan SC
            ['kode' => 'A11.64607', 'nama' => 'Pengolahan Citra', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SC'],
            ['kode' => 'A11.64712', 'nama' => 'Penglihatan Komputer dan Analisis Citra', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SC'],
            ['kode' => 'A11.64710', 'nama' => 'Pemrograman Game', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SC'],
            ['kode' => 'A11.64711', 'nama' => 'Pengembangan Game', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SC'],
            ['kode' => 'A11.64708', 'nama' => 'Pemrosesan Bahasa Alami Berbasis Teks', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SC'],
            ['kode' => 'A11.64714', 'nama' => 'Komputasi Quantum', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SC'],
        
            // Mata Kuliah peminatan SKKKD
            ['kode' => 'A11.64609', 'nama' => 'Komputasi Awan', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SKKKD'],
            ['kode' => 'A11.64610', 'nama' => 'Sistem Tertanam', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SKKKD'],
            ['kode' => 'A11.64716', 'nama' => 'Forensik Digital', 'teori' => 3, 'praktikum' => 0, 'angkatan' => 2021, 'semester' => 6, 'peminatan' => 'SKKKD'],
            
        ];

        // Masukkan data ke tabel mata_kuliah
        foreach ($data as $item) {
            $this->db->table('mata_kuliah')->insert($item);
        }
        
    }
}
