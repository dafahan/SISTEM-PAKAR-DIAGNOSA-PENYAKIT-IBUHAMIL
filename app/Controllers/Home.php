<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function register($nama = "", $email= "", $password= "", $alamat="", $tgl=""): string
    {
        $data = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'alamat' => $alamat,
            'tgl' => $tgl,

        ];
        return view('register', $data);
    }
}
