<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_Model extends Model
{
	protected $table = 'admin';
	protected $allowedFields = ['email', 'password', 'name'];
}
