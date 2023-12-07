<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function register($nama = "", $email= "", $password= "", $alamat="", $umur=""): string
    {
        $data = [
            'nama' => $nama,
            'umur' => $umur,
            'email' => $email,
            'password' => $password,
            'alamat' => $alamat,
            

        ];
        return view('register', $data);
    }
}
