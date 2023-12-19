<?php

namespace App\Controllers;



use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RulesModel;
use App\Models\PenyakitModel;
use App\Models\GejalaModel;
use App\Models\DiagnosisModel;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }

    public function diagnosis(){
        $diagnosis = new DiagnosisModel();
        $data = $diagnosis
        ->select("diagnosis.*,users.username as nama,penyakit.nama as penyakit")
        ->join("users","users.id=id_user")
        ->join("penyakit","id_penyakit=penyakit.kode")
        ->findAll();
        
        foreach ($data as &$row) {
            // Assuming 'rules' is a column in your database containing a string like "1,2,3,4,5"
            $numbersArray = explode(',', $row['gejala']);
            
            // Add "G" before each number
            $modifiedArray = array_map(function ($number) {
                return 'G' . $number;
            }, $numbersArray);
            
            // Join the modified array back into a string
            $row['gejala'] = implode(',', $modifiedArray);
        }
        
        return view('indexDiagnosis',["diagnosis"=>$data]);
    }


    public function admin(){
        $users = model(UserModel::class);
        $user = $users->findAll();
      
       $data = [
            'user' => $user,
       ];
        return view('indexAdmin',$data);
    }
    public function deletePasien($id){
        $users = model(UserModel::class);
        $users->delete($id);
        return redirect()->to(base_url('admin'));
    }
    public function adminpenyakit(){
        $penyakit = new PenyakitModel();
      $data = [
      "penyakit" => $penyakit->findAll(),
      ];
      
        return view('indexPenyakit', $data);
    }
    
    public function tambahpenyakit($id=null){
        if($id!=null){
            $penyakit = new PenyakitModel();
            $data = ['penyakit'=>$penyakit->find($id)];
            return view('tambahPenyakit',$data);
        }
        return view('tambahPenyakit');
    }
    public function updatepenyakit($id){
        $penyakit = new PenyakitModel();
        $data = $this->request->getVar(['nama']);
      
        $penyakit->update($id,$data);
        return redirect()->to(base_url('admin/penyakit'));
    }
    public function deletePenyakit($id){
        $penyakit = new PenyakitModel();
        $penyakit->delete($id);
        return redirect()->to(base_url('admin/penyakit'));
    }
    public function storepenyakit(){
        $penyakit = new PenyakitModel();
        $penyakit->insert($this->request->getVar(['nama']));


        return redirect()->to(base_url('admin/penyakit'));
    }

    //Gejala

    public function admingejala($gejala="", $penyakit=" "){
        $gejala = new GejalaModel();
        $data = ['gejala' =>$gejala->findAll()];
       
        

        return view('indexGejala', $data);
    }

    public function tambahgjl($page=null,$id=null){
        if($id!=null&&$page=="edit"){
            $gejala = new GejalaModel();
            $data = ['gejala' => $gejala->find($id)];
            
            return view('tambahGejala',$data);
        }else if($id!=null&&$page=="delete"){
            $gejala = new GejalaModel();
            $gejala->delete($id);
            return redirect()->to(base_url('admin/gejala'));
        }
        return view('tambahGejala');
    }

    public function storegjl($page=null,$id=null){
       
        // dd($this->request->getVar());
        $gejala = new GejalaModel();
        $data = $this->request->getVar(['gejala']);
        if($id!=null&&$page=="update"){
            $gejala->update($id,$data);
            
            return redirect()->to(base_url('admin/gejala'));
        }
       
      
        $gejala->insert($data);
           

        return redirect()->to(base_url('admin/gejala'));
    }

    //Solusi

    public function adminsolusi($namasol="", $penyakit=""){
        $rules = new RulesModel();
        $data = ['rules' => $rules->findAll()];
        
        foreach ($data['rules'] as &$row) {
            $numbersArray = explode(',', $row['rule']);
            $modifiedArray = array_map(function ($number) {
                return 'G' . $number;
            }, $numbersArray);
           
   
            $row['rule'] = implode(',', $modifiedArray);
        }

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
