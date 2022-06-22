<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PasienModel;

class Pasien extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new PasienModel();
    }
    public function index()
    {
        $data['pasien']  = $this->model->getPasien()->getResult();
        echo view('pasien/create', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nomor_telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'pemeriksaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'permintaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->model->savePasien([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'nomor_telepon' => $this->request->getVar('nomor_telepon'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'pemeriksaan' => $this->request->getVar('pemeriksaan'),
            'permintaan' => $this->request->getVar('permintaan'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);
        session()->setFlashdata('message', 'Mendaftar Berhasil');
        return redirect()->to('/pasien');
    }
}
