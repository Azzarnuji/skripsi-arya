<?php

namespace App\Models;

use CodeIgniter\Model;

class Members_Model extends Model
{
	protected $table = 'members';
	protected $allowedFields = ['email', 'password', 'nama', 'address', 'phone', 'no_ktp', 'no_sim'];
}
