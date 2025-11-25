<?php

namespace App\Controllers;

use App\Models\PendudukModel;
use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel, $pendudukModel;

    public function __construct()  
    {
        $this->userModel = new UserModel();
        $this->pendudukModel = new PendudukModel();
    }

    public function index()
    {
        $user = $this->userModel->findAll();
        $penduduk = $this->pendudukModel->findAll();
        $data = [
            'user' => $user,
            'penduduk' => $penduduk
        ];
        return view('user', $data);
    }

    public function add()
    {
        $penduduk = $this->pendudukModel->findAll();
        $data = [
            'penduduk' => $penduduk
        ];
        return view('user_add', $data);
    }

    public function save()
    {
        $this->userModel->insert([
            'username'  => $this->request->getVar('username'),
            'penduduk_id'      => $this->request->getVar('nama'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'role'      => $this->request->getVar('role')
        ]);

        session()->setFlashdata('pesanT', 'Data berhasil ditambahkan.');
        return redirect()->to('/User');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('pesanH', 'Data berhasil dihapus.');
        return redirect()->to('/User');
    }

    public function edit($id)
    {
        $data = [
            'user'  => $this->userModel->getUser($id),
            'penduduk' => $this->pendudukModel->findAll()
        ];

        return view('user_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'username'  => $this->request->getVar('username'),
            'penduduk_id' => $this->request->getVar('nama'),
            'role'      => $this->request->getVar('role')
        ];

        if(!empty($this->request->getVar('password'))) {
            $data = [
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            ];
        }

        $this->userModel->update(['id' => $id], $data);
        session()->setFlashdata('pesanT', 'Data berhasil diedit.');
        return redirect()->to('/User');
    }
}