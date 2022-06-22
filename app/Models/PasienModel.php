<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{

    public function getHasil()
    {
        $builder = $this->db->table('hasil');
        return $builder->get();
    }

    public function getPasien()
    {
        $builder = $this->db->table('pasien');
        $builder->select('*');
        $builder->join('hasil', 'hasil_id = pasien_hasil_id', 'left');
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
