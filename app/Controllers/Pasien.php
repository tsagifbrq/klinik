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
        $data['hasil'] = $this->model->getHasil()->getResult();
        echo view('pasien/create', $data);
    }

    public function save()
    {
        $data = array(
            'nama'          => $this->request->getPost('nama'),
            'nik'           => $this->request->getPost('nik'),
            'tgl_lahir'     => $this->request->getPost('tgl_lahir'),
            'hasil_id'      => $this->request->getPost('hasil'),
        );
        $this->model->saveProduct($data);
        return redirect()->to('/pasien/create');
    }
}
