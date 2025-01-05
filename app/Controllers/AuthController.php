<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        $nim = $this->request->getPost('nim');
        $password = $this->request->getPost('password');

        $model = new MahasiswaModel();
        $mahasiswa = $model->where('nim', $nim)->first();

        if ($mahasiswa && password_verify($password, $mahasiswa['password'])) {
            session()->set([
                'logged_in' => true,
                'nim' => $mahasiswa['nim'],
                'nama' => $mahasiswa['nama'],
            ]);
            return redirect()->to('/index');
        } else {
            return redirect()->to('/login')->with('error', 'NIM atau Password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

}
