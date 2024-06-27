<?php

namespace App\Models;

use CodeIgniter\Model;

class Driver_Model extends Model
{
	protected $table = 'supir';
	protected $allowedFields = ['id','name', 'no_ktp', 'no_sim'];
}
