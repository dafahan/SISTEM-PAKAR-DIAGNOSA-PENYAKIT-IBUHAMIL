<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {       
        if(logged_in())return redirect()->to(base_url('dashboard'));

        return view('index');
    }
    public function dashboard(){
        return view('dashboard');
    }

    public function register($nama = "", $email= "", $password= "", $alamat="", $umur="", $pass_confirm=""): string
    {
        $data = [
            'nama' => $nama,
            'umur' => $umur,
            'email' => $email,
            'password' => $password,
            'pass_confirm' => $pass_confirm,
            'alamat' => $alamat,
        ];
        return view('register', $data);
    }

    
}
