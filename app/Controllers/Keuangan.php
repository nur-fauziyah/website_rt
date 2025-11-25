<?php

namespace App\Controllers;
use App\Models\KeuanganModel;

class Keuangan extends BaseController
{
    protected $keuanganModel;

    public function __construct()  
    {
        $this->keuanganModel = new KeuanganModel();
    }

    public function index()
    {
        $keuangan = $this->keuanganModel->findAll();
        $data = [
            'keuangan' => $keuangan
        ];
        return view('keuangan', $data);
    }

    public function add()
    {
        return view('keuangan_add');
    }

    public function save()
    {
        $this->keuanganModel->insert([
            'pendapatan' => $this->request->getVar('pendapatan'),
            'sumber' => $this->request->getVar('sumber'),
            'pengeluaran' => $this->request->getVar('pengeluaran'),
            'tanggal' => date('Y-m-d', strtotime($this->request->getVar('tanggal'))),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesanT', 'Data berhasil ditambahkan.');
        return redirect()->to('/Keuangan');
    }

    public function delete($id)
    {
        $this->keuanganModel->delete($id);
        session()->setFlashdata('pesanH', 'Data berhasil dihapus.');
        return redirect()->to('/Keuangan');
    }

    public function edit($id)
    {
        $data = [
            'keuangan'  => $this->keuanganModel->getKeuangan($id)
        ];

        return view('keuangan_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'pendapatan' => $this->request->getVar('pendapatan'),
            'sumber' => $this->request->getVar('sumber'),
            'pengeluaran' => $this->request->getVar('pengeluaran'),
            'tanggal' => date('Y-m-d', strtotime($this->request->getVar('tanggal'))),
            'keterangan' => $this->request->getVar('keterangan')
        ];

        $this->keuanganModel->update(['id' => $id], $data);
        session()->setFlashdata('pesanT', 'Data berhasil diedit.');
        return redirect()->to('/Keuangan');
    }
}