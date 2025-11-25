<?php

namespace App\Controllers;

use App\Models\PendudukModel;

class Penduduk extends BaseController
{
    protected $pendudukModel;

    public function __construct()  
    {
        $this->pendudukModel = new PendudukModel();
    }

    public function index()
    {
        $penduduk = $this->pendudukModel->findAll();
        $data = [
            'penduduk' => $penduduk
        ];
        return view('penduduk', $data);
    }

    public function add()
    {
        return view('penduduk_add');
    }

    public function save()
    {
        if(!$this->validate([
            'nik'   => 'required|is_unique[penduduk.nik]'
        ])) {
            session()->setFlashdata('validation_errors', $this->validator->getErrors());
            return redirect()->to('/Penduduk/add');
        }

        $this->pendudukModel->insert([
            'nik'           => $this->request->getVar('nik'),
            'nama'          => $this->request->getVar('nama'),
            'tempat_lahir'  => $this->request->getVar('tempatlahir'),
            'tanggal_lahir' => date('Y-m-d', strtotime($this->request->getVar('tanggallahir'))),
            'jenis_kelamin' => $this->request->getVar('jeniskelamin'),
            'warga_negara'  => $this->request->getVar('warganegara'),
            'agama'         => $this->request->getVar('agama'),
            'status_nikah'  => $this->request->getVar('statusnikah'),
            'alamat'        => $this->request->getVar('alamat'),
            'no_telp'       => $this->request->getVar('notelp'),
            'email'         => $this->request->getVar('email'),
            'pendidikan_terakhir'  => $this->request->getVar('pendidikan'),
            'pekerjaan'     => $this->request->getVar('pekerjaan'),
            'no_kk'         => $this->request->getVar('nokk'),
            'nama_ayah'     => $this->request->getVar('namaayah'),
            'nama_ibu'      => $this->request->getVar('namaibu'),
        ]);

        session()->setFlashdata('pesanT', 'Data berhasil ditambahkan.');

        return redirect()->to('/Penduduk');
    }

    public function delete($id)
    {
        $this->pendudukModel->delete($id);
        session()->setFlashdata('pesanH', 'Data berhasil dihapus.');
        return redirect()->to('/Penduduk');
    }

    public function edit($id)
    {
        $data = [
            'penduduk'  => $this->pendudukModel->getPenduduk($id)
        ];

        return view('penduduk_edit', $data);
    }

    public function update($id)
    {   
        //cek nik
        $pendudukL = $this->pendudukModel->getPenduduk($id);
        if($pendudukL['id'] == $this->request->getVar('id')){
            $rule = 'required';
        } else {
            $rule = 'required|is_unique[penduduk.nik]';
        }

        if(!$this->validate([
            'nik'   => $rule
        ])) {
            session()->setFlashdata('validation_errors', $this->validator->getErrors());
            return redirect()->to('/Penduduk/edit/'. $this->request->getVar('nik'));
        }

        $data = [
            'id'            => $this->request->getVar('id'),
            'nik'           => $this->request->getVar('nik'),
            'nama'          => $this->request->getVar('nama'),
            'tempat_lahir'  => $this->request->getVar('tempatlahir'),
            'tanggal_lahir' => date('Y-m-d', strtotime($this->request->getVar('tanggallahir'))),
            'jenis_kelamin' => $this->request->getVar('jeniskelamin'),
            'warga_negara'  => $this->request->getVar('warganegara'),
            'agama'         => $this->request->getVar('agama'),
            'status_nikah'  => $this->request->getVar('statusnikah'),
            'alamat'        => $this->request->getVar('alamat'),
            'no_telp'       => $this->request->getVar('notelp'),
            'email'         => $this->request->getVar('email'),
            'pendidikan_terakhir'  => $this->request->getVar('pendidikan'),
            'pekerjaan'     => $this->request->getVar('pekerjaan'),
            'no_kk'         => $this->request->getVar('nokk'),
            'nama_ayah'     => $this->request->getVar('namaayah'),
            'nama_ibu'      => $this->request->getVar('namaibu'),
        ];

        $this->pendudukModel->update(['id' => $id], $data);

        session()->setFlashdata('pesanT', 'Data berhasil diedit.');

        return redirect()->to('/Penduduk');
    }
}