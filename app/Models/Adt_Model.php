<?php

namespace App\Models;

use CodeIgniter\Model;

class Adt_Model extends Model
{
	protected $table = 'rental';
	protected $allowedFields = ['idMobil', 'merk', 'pabrikan', 'hargaOne', 'hargaTwo', 'description', 'img', 'status'];
}
