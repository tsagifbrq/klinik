<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = "pasien";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id',
        'nik',
        'nama',
        'nomor_telepon',
        'tempat_lahir',
        'tgl_lahir',
        'pemeriksaan',
        'permintaan',
        'jenis_kelamin',
    ];

    public function getPasien()
    {
        $builder = $this->db->table('pasien');
        $builder->select('*');
        return $builder->get();
    }

    public function savePasien($data)
    {
        $query = $this->db->table('pasien')->insert($data);
        return $query;
    }

    public function updatePasien($data, $id)
    {
        $query = $this->db->table('pasien')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteProduct($id)
    {
        $query = $this->db->table('pasien')->delete(array('id' => $id));
        return $query;
    }
}
