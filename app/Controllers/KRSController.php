<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KRSModel;
use App\Models\MahasiswaModel;
use App\Models\MataKuliahModel;
use CodeIgniter\HTTP\ResponseInterface;

class KRSController extends BaseController
{

    public function index()
    {
        $mataKuliahModel = new MataKuliahModel();
        $data['mataKuliah'] = $mataKuliahModel->findAll();

        // Log debugging
        log_message('debug', 'Mata Kuliah: ' . json_encode($data['mataKuliah']));

        // Jika data mata kuliah kosong, kirimkan error
        if (empty($data['mataKuliah'])) {
            return view('krs', ['error' => 'Mata kuliah tidak ditemukan']);
        }

        return view('krs', $data);
    }

    public function getMataKuliah()
    {
        $mataKuliahModel = new MataKuliahModel();

        try {
            $mataKuliah = $mataKuliahModel->findAll();

            return $this->response->setJSON([
                'success' => true,
                'mataKuliah' => $mataKuliah
            ]);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengambil data mata kuliah.'
            ]);
        }
    }

    public function simpan()
    {
        $krsModel = new KRSModel();
        $data = $this->request->getJSON();

        if (!isset($data->mata_kuliah) || empty($data->mata_kuliah)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Data mata kuliah tidak valid.']);
        }

        try {
            foreach ($data->mata_kuliah as $idMataKuliah) {
                $krsModel->save([
                    'user_id' => session()->get('user_id'),
                    'mata_kuliah_id' => $idMataKuliah
                ]);
            }
            return $this->response->setJSON(['success' => true, 'message' => 'KRS berhasil disimpan.']);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan KRS.']);
        }
    }
}
