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
        $data = [
            'baju' => $this->bajuModel->getBaju()
        ];

        $baju = $this->bajuModel->findAll();
        
        // return view('home');
    }



    public function detail($id)
    {
        $baju = $this->bajuModel->getBaju($id);

        $data = [
            'baju' => $this->bajuModel->getBaju($id)
        ];

        return view('index');
    }
}
