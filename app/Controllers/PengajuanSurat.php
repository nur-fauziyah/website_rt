<?php

namespace App\Controllers;
use App\Models\PengajuanSuratModel;

class PengajuanSurat extends BaseController
{
    protected $pengajuanModel;

    public function __construct()  
    {
        $this->pengajuanModel = new PengajuanSuratModel();
    }

    public function index()
    {
        $pengajuan = $this->pengajuanModel->findAll();
        $data = [
            'pengajuan' => $pengajuan
        ];
        return view('pengajuan', $data);
    }

    public function add() 
    {
        return view('pengajuan_add');
    }

    public function save() 
    {
        $lampiran = $this->request->getFile('lampiran');
        $lampiran->move('uploads');
        $namaLampiran = $lampiran->getName();

        $this->pengajuanModel->insert([
            'user_id'   => $this->request->getVar('user_id'),
            'jenis_surat'    => $this->request->getVar('jenissurat'),
            'lampiran'  => $namaLampiran,
            'keperluan'=> $this->request->getVar('keperluan'),
            'status'    => 'Menunggu Konfirmasi'
        ]);

        session()->setFlashdata('pesanT', 'Data berhasil ditambahkan.');

        return redirect()->to('/PengajuanSurat');
    }

    public function edit($id)
    {
        $data = [
            'pengajuan'  => $this->pengajuanModel->getPengajuan($id)
        ];
        return view('pengajuan_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'status'  => $this->request->getVar('status'),
        ];

        $this->pengajuanModel->update(['id' => $id], $data);
        session()->setFlashdata('pesanT', 'Data berhasil diedit.');
        return redirect()->to('/PengajuanSurat');
    }

    public function download_pdf($fileName)
    {
        // Tentukan direktori file PDF
        $filePath = 'uploads/'.$fileName;

        // Periksa apakah file PDF ada
        if (file_exists($filePath)) {
            // Set header respons untuk file PDF
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . $fileName . '"');

            // Baca dan kirim isi file PDF ke output
            readfile($filePath);
            exit;
        } else {
            session()->setFlashdata('pesanH', 'File tidak ditemukan');
            return redirect()->to('/PengajuanSurat');
        }
    }
}