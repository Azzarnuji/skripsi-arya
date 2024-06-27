<?php

namespace App\Models;

use CodeIgniter\Model;

class Payment_Model extends Model
{

	protected $table = 'pembayaran';
	protected $allowedFields = ['payment_id', 'booking_id', 'bukti_img', 'wajib_bayar', 'status_payment','created_at','updated_at'];
}
