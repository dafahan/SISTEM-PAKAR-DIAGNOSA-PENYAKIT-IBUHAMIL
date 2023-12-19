<?php

namespace App\Models;

use CodeIgniter\Model;

class DiagnosisModel extends Model
{
    protected $table      = 'diagnosis';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id_user', 'tanggal', 'id_penyakit', 'gejala'];
}
