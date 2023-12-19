<?php

namespace App\Controllers;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\DiagnosisModel;


class Home extends BaseController
{

    protected $countDiag;

    public function __construct()
    {
        $diagnosis = new DiagnosisModel();
      
        $res = $diagnosis->where('id_user',user_id())->findAll();
        $this->countDiag = $res == null ? 0 : count($res);
    }

    public function index()
    {       
        //dd(in_groups("user"));
        if(in_groups("admin"))return redirect()->to(base_url('admin'));
        if(in_groups("user"))return redirect()->to(base_url('dashboard'));

        return view('index');
    }

    public function result(){
        $diagnosis = new DiagnosisModel();
        $data = $diagnosis
        ->select("diagnosis.*,penyakit.nama as penyakit")
        ->join("penyakit","id_penyakit=penyakit.kode")
        ->where('id_user',user_id())
        ->findAll();
        
     
        foreach ($data as &$row) {
          
            $numbersArray = explode(',', $row['gejala']);
            $modifiedArray = array_map(function ($number) {
                return 'G' . $number;
            }, $numbersArray);
            $row['gejala'] = implode(',', $modifiedArray);
        }
        
        return view('listresult',["diagnosis"=>$data,"countDiag"=>$this->countDiag]);
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
            
            
            $result = $penyakit->getByKodePenyakit(diagnose($answers));
            $data['diagnosedDiseases'] = $result;
            $diagnosa = [
                'id_user' => user_id(),
                'id_penyakit' => empty($result)? "9999" : $result['kode'],
                'gejala' => empty($answers)? "": implode(',',$answers),
                'tanggal' => date("Y-m-d"),
            ];
            $data['countDiag'] = $this->countDiag;
            $diagnosis->insert($diagnosa);
            return view('resultdiagnosis',$data);
        }
        $data = $gejala->findAll();
      
        
        return view('diagnosis',["gejala" => $data,"countDiag" => $this->countDiag]);
    }

    public function dashboard(){
        return view('dashboard',["countDiag"=>$this->countDiag]);
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
            "countDiag"=>$this->countDiag,
        ];
        return view('register', $data);
    }

    
}
