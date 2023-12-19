<?php

namespace App\Controllers;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\DiagnosisModel;


class Home extends BaseController
{
    public function index()
    {       
        //dd(in_groups("user"));
        if(in_groups("admin"))return redirect()->to(base_url('admin'));
        if(in_groups("user"))return redirect()->to(base_url('dashboard'));

        return view('index');
    }

    public function diagnosis(){
        $diagnosis = new DiagnosisModel();
        $gejala = new GejalaModel();
        $penyakit = new PenyakitModel();
        if($this->request->getMethod()=='post'){
            $answers = [];
        
            foreach ($this->request->getPost() as $key => $value) {
                if (strpos($key, 'answer_') === 0 && (int)$value === 1) {
                    $gejalaId = str_replace('answer_', '', $key);
                    $answers[] = $gejalaId;
                }
            }
            
            $symp = $penyakit->getByKodePenyakit(diagnose($answers));
            dd($symp);
        }
        $data = $gejala->findAll();
        return view('diagnosis',["gejala" => $data]);
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
