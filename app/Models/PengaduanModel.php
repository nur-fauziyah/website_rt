<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $allowedFields = ['user_id','tanggal','lokasi','urgensi','lampiran','keterangan','status'];

    public function getPengaduan($id = false)
    {
        if($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}