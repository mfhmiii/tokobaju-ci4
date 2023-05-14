<?php

namespace App\Models;

use CodeIgniter\Model;

class BajuModel extends Model
{
    protected $table = 'baju';
    protected $id = 'id';

    public function getBaju($id = false)
    {
        if($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}