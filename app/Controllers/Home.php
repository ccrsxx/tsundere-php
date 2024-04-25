<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function home(): void
    {
        $data = [
            'judul' => 'Halaman Depan'
        ];

        echo view("home/header");
        echo view("home/index", $data);
        echo view("home/footer");
    }

    public function about(): void
    {
        $data = [
            'judul' => 'Halaman About'
        ];

        echo view("home/header");
        echo view("home/about", $data);
        echo view("home/footer");
    }
}
