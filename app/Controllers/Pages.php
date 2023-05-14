<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Uniqlo'
        ];

        return view('pages/home', $data);
    }
    
}
