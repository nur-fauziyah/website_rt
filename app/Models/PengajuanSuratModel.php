<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanSuratModel extends Model
{
    protected $table = 'pengajuan_surat';
    protected $allowedFields = ['user_id','jenis_surat','lampiran','keperluan','status'];

    public function getPengajuan($id = false)
    {
        if($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}