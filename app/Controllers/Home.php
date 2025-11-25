<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProkerModel;

class Home extends BaseController
{
    protected $userModel, $prokerModel;

    public function __construct()  
    {
        $this->userModel = new UserModel();
        $this->prokerModel = new ProkerModel();
    }

    public function index()
    {
        $user = $this->userModel->findAll();
        $proker = $this->prokerModel->findAll();
        $data = [
            'user' => $user,
            'proker' => $proker
        ];
        return view('homepage', $data);
    }
}