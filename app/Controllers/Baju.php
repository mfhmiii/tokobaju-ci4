<?php

namespace App\Controllers;

use App\Models\BajuModel;

class Baju extends BaseController
{
    protected $bajuModel;
    public function __construct()
    {
        $this->bajuModel = new BajuModel();
    }
    public function index()
    {
        $baju = $this->bajuModel->findAll();
        
        return view('index');
    }
}
