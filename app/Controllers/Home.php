<?php

namespace App\Controllers;
use App\Models\PortoModel;

class Home extends BaseController
{
    protected $PortoModel;
    public function __construct()
    {
        $this->PortoModel = new PortoModel();
    }
    public function index()
    {
        $Porto = $this->PortoModel->findAll();
        $data = [
            'title' => 'CV | Belajar CI4',
            'page' => 'home',
            'porto' => $Porto
        ];
        return view('home', $data);
    }
}
