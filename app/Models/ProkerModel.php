<?php

namespace App\Models;

use CodeIgniter\Model;

class ProkerModel extends Model
{
    protected $table = 'proker';
    protected $allowedFields = ['judul','isi','penulis','tanggal','gambar'];

    public function getProker($id = false)
    {
        if($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}