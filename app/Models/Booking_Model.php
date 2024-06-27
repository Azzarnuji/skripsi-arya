<?php

namespace App\Models;

use CodeIgniter\Model;

class Booking_Model extends Model
{

	protected $table = 'penyewaan';
	protected $allowedFields = ['booking_id', 'email', 'idMobil', 'pakai_supir', 'mulai_sewa', 'selesai_sewa', 'total_hari', 'payment_id'];
}
