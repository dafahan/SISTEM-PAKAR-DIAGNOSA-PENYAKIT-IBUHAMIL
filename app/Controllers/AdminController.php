<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }

    public function admin(){
        return view('indexAdmin');
    }

    public function adminpenyakit($idp ="", $penyakit=""){

      $data = [  'idp' => $idp,
                'penyakit' => $penyakit
              ];

        return view('indexPenyakit', $data);
    }

    public function tambahpenyakit(){
        return view('tambahPenyakit');
    }

    public function storepenyakit(){
        // dd($this->request->getVar());

        $data =[
            'idp' => $this->request->getVar('idp'),
            'namap' => $this->request->getVar('namap'),
           
        ];

        return view('indexPenyakit', $data);
    }

    //Gejala

    public function admingejala($gejala="", $penyakit=" "){
        $data = 
        [  
            'gejala' => $gejala,
            'penyakit' => $penyakit

      ];

        return view('indexGejala', $data);
    }

    public function tambahgjl(){
        
        return view('tambahGejala');
    }

    public function storegjl(){
        // dd($this->request->getVar());

        $data =[
            
            'namagjl' => $this->request->getVar('namagjl'),
            'idp' => $this->request->getVar('penyakit'),
           
        ];

        return view('indexGejala', $data);
    }

    //Solusi

    public function adminsolusi($namasol="", $penyakit=""){
      $data =[
        'namasol' => $namasol,
        '$penyakit' => $penyakit

      ] ;


        return view('indexSolusi', $data);
    }

    public function tambahsol(){

        return view('tambahSolusi');
    }

    public function storesol(){

        $data = [

            'namasol' => $this->request->getVar('namasol'),
            'idp' => $this->request->getVar('penyakit'),

        ];
        return view('indexSolusi');
    }

    
    
}
