<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\ResponseInterface;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        return view('mahasiswa/index', $data);
    }

    public function store()
    {
        $model = new MahasiswaModel();
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'ipk' => $this->request->getPost('ipk'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $model->save($data);
        return redirect()->to('/mahasiswa');
    }
}
