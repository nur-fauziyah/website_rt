<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table = 'penduduk';
    protected $allowedFields = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'warga_negara', 'agama', 'status_nikah', 'alamat', 'no_telp', 'email', 'pendidikan_terakhir', 'pekerjaan', 'no_kk', 'nama_ayah', 'nama_ibu'];

    public function getPenduduk($id = false)
    {
        if($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}