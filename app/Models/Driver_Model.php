<?php

namespace App\Models;

use CodeIgniter\Model;

class Driver_Model extends Model
{
	protected $table = 'drivers';
	protected $allowedFields = ['name', 'no_ktp', 'no_sim'];
}
