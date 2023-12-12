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

    public function adminpenyakit($idp ="", $namap=""){

      $data = [  'idp' => $idp,
                'namap' => $namap

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

    public function admingejala(){

        return view('indexGejala');
    }

    public function tambahgjl(){
        
        return view('tambahGejala');
    }

    public function storegjl(){
        // dd($this->request->getVar());

        $data =[
            
            'namagjl' => $this->request->getVar('namagjl'),
           
        ];

        return view('indexGejala', $data);
    }

    public function adminsolusi(){

        return view('indexSolusi');
    }

    public function tambahsol(){

        return view('tambahSolusi');
    }

    public function storesol(){

        return view('indexSolusi');
    }

    
    
}
