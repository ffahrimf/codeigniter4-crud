<?php

namespace App\Models;

use CodeIgniter\Model;

class Mobil_model extends Model
{
    protected $table = 't_mobil';

    public function getMobil($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveMobil($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editMobil($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }

    public function hapusMobil($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}
