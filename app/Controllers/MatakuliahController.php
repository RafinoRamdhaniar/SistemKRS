<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MataKuliahModel;
use CodeIgniter\HTTP\ResponseInterface;

class MatakuliahController extends BaseController
{
    public function index()
    {
        $mataKuliahModel = new MataKuliahModel();
        $data['mataKuliah'] = $mataKuliahModel->findAll(); // Ambil semua data mata kuliah
        return view('krs', $data);
    }
}
