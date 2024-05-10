<?php
namespace App\Models;

use CodeIgniter\Model;

class Test_Model extends Model{
    protected $table = 'data_santri';
    protected $allowedFields = ['nama_santri', 'kelas_santri','alamat_santri'];
}