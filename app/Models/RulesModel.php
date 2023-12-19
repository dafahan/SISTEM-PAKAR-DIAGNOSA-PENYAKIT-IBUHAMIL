<?php

namespace App\Models;

use CodeIgniter\Model;

class RulesModel extends Model
{
    protected $table = 'rules';
    protected $primaryKey = 'id';
    protected $allowedFields = ['rule','penyakit'];
}
