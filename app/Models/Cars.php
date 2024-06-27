<?php

namespace App\Models;

use CodeIgniter\Model;

class Cars extends Model
{
	protected $table = 'mobil';
	protected $allowedFields = ['idMobil', 'merk', 'pabrikan', 'tahun', 'hargaOne', 'hargaTwo', 'description', 'img', 'nomor_plat', 'nomor_rangka', 'nomor_mesin', 'kapasitas_mesin', 'tipe_bbm', 'tampil_homepage'];
}
