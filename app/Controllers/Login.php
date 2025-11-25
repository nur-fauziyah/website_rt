<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;

    public function __construct()  
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('login');
    }

    public function proses()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $datauser = $this->userModel->where(['username' => $username,])->first();

        if($datauser != null) {
            if(password_verify($password, $datauser['password'])) {
                session()->set([
                    'id' => $datauser['id'],
                    'username' => $datauser['username'],
                    'role' => $datauser['role'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/Dashboard');
            } else {
                session()->setFlashdata('error', 'Username Atau Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}