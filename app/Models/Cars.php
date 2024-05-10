<?php

namespace App\Models;

use CodeIgniter\Model;

class Cars extends Model
{
	protected $table = 'rental';
	protected $allowedFields = ['idMobil', 'merk', 'pabrikan', 'tahun', 'hargaOne', 'hargaTwo', 'description', 'img', 'status'];
}
