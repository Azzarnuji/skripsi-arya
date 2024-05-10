<?php
namespace App\Models;

use CodeIgniter\Model;

class Reviews_Model extends Model{
    protected $table = 'reviews';
    protected $allowedFields = ['name','thumbnail','rating','snippets'];
}