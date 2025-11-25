<?php

namespace App\Controllers;
use App\Models\PengaduanModel;

class Pengaduan extends BaseController
{
    protected $pengaduanModel;

    public function __construct()  
    {
        $this->pengaduanModel = new PengaduanModel();
    }

    public function index()
    {
        $pengaduan = $this->pengaduanModel->findAll();
        $data = [
            'pengaduan' => $pengaduan
        ];
        return view('pengaduan', $data);
    }

    public function add() 
    {
        return view('pengaduan_add');
    }

    public function save() 
    {
        $lampiran = $this->request->getFile('lampiran');
        $lampiran->move('img');
        $namaLampiran = $lampiran->getName();

        $this->pengaduanModel->insert([
            'user_id'   => $this->request->getVar('user_id'),
            'tanggal'   => date('Y-m-d', strtotime($this->request->getVar('tanggal'))),
            'lokasi'    => $this->request->getVar('lokasi'),
            'urgensi'   => $this->request->getVar('urgensi'),
            'lampiran'  => $namaLampiran,
            'keterangan'=> $this->request->getVar('keterangan'),
            'status'    => 'Menunggu Konfirmasi'
        ]);

        session()->setFlashdata('pesanT', 'Data berhasil ditambahkan.');

        return redirect()->to('/Pengaduan');
    }

    public function edit($id)
    {
        $data = [
            'pengaduan'  => $this->pengaduanModel->getPengaduan($id)
        ];
        return view('pengaduan_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'status'  => $this->request->getVar('status'),
        ];

        $this->pengaduanModel->update(['id' => $id], $data);
        session()->setFlashdata('pesanT', 'Data berhasil diedit.');
        return redirect()->to('/Pengaduan');
    }
}