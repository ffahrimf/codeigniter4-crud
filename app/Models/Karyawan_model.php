<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan_model extends Model
{
    protected $table = 'karyawan';

    public function getKaryawan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['nik' => $id]);
        }
    }

    public function saveKaryawan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editKaryawan($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('nik', $id);
        return $builder->update($data);
    }

    public function hapusKaryawan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['nik' => $id]);
    }
}
