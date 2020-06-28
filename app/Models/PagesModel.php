<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table = 'komik';
    protected $useTimestamps = true;

     public function getPages()
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
