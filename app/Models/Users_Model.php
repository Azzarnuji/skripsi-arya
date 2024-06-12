<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_Model extends Model
{
	protected $table = 'users';
	protected $allowedFields = ['email', 'password', 'name'];
}
