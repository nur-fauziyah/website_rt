<?php

namespace App\Controllers;
use App\Models\ProkerModel;

class Berita extends BaseController
{
    protected $prokerModel;

    public function __construct()  
    {
        $this->prokerModel = new ProkerModel();
    }

    public function index()
    {
        $proker = $this->prokerModel->findAll();
        $data = [
            'proker' => $proker
        ];
        return view('proker', $data);
    }

    public function add()
    {
        return view('proker_add');
    }

    public function save()
    {
        $gambar = $this->request->getFile('gambar');
        $gambar->move('img');
        $namaGambar = $gambar->getName();

        $this->prokerModel->insert([
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'penulis' => $this->request->getVar('penulis'),
            'tanggal' => date('Y-m-d', strtotime($this->request->getVar('tanggal'))),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesanT', 'Data berhasil ditambahkan.');
        return redirect()->to('/Berita');
    }

    public function delete($id)
    {
        $this->prokerModel->delete($id);
        session()->setFlashdata('pesanH', 'Data berhasil dihapus.');
        return redirect()->to('/berita');
    }

    public function edit($id)
    {
        $data = [
            'proker'  => $this->prokerModel->getProker($id)
        ];

        return view('proker_edit', $data);
    }

    public function update($id)
    {
        $gambar = $this->request->getFile('gambar');
        $gambar->move('img');
        $namaGambar = $gambar->getName();

        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'penulis' => $this->request->getVar('penulis'),
            'tanggal' => date('Y-m-d', strtotime($this->request->getVar('tanggal'))),
        ];

        if(!empty($gambar)) {
            $data = [
                'gambar'  => $namaGambar
            ];
        }

        dd($data);
        $this->prokerModel->update(['id' => $id], $data);
        session()->setFlashdata('pesanT', 'Data berhasil diedit.');
        return redirect()->to('/Berita');
    }
}