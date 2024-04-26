<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function home(): string
    {
        $data = [
            'judul' => 'Halaman Depan'
        ];

        return view('home/header') . view('home/index', $data) . view('home/footer');
    }

    public function about(): string
    {
        $data = [
            'judul' => 'Halaman About'
        ];

        return view('home/header') . view('home/about', $data) . view('home/footer');
    }
}
