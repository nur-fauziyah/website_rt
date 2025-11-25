<?php

namespace App\Models;

use CodeIgniter\Model;

class KeuanganModel extends Model
{
    protected $table = 'keuangan';
    protected $allowedFields = ['pendapatan', 'sumber', 'pengeluaran', 'tanggal', 'keterangan'];

    public function getKeuangan($id = false)
    {
        if($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}