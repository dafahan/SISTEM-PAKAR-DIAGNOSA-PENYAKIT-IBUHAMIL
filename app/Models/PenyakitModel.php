<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $table = 'penyakit';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['nama','kode'];

    public function getByKodePenyakit($kodePenyakit)
    {       
        if (empty($kodePenyakit)||$kodePenyakit == null) {
            return "";
        }
        return $this->find($kodePenyakit);

    }
}
