<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | LearnCI'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | LearnCI'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | LearnCI',
            'alamat' => [
                'tipe' => 'rumah',
                'alamat' => 'jl. abc no 19',
                'telp' => '09889123098'
            ],
            [
                'tipe' => 'kantor',
                'alamat' => 'jl setiawan no 90',
                'telp' => '0910238091'
            ]
        ];
        return view('pages/contact', $data);
    }
}
