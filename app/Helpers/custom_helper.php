<?php

use CodeIgniter\CodeIgniter;

function limitWords($string, $limit)
{
	// Split the string into an array of words
	$words = explode(' ', $string);

	// If the number of words is less than or equal to the limit, return the original string
	if (count($words) <= $limit) {
		return $string;
	}

	// Slice the array to get the first $limit words
	$limitedWords = array_slice($words, 0, $limit);

	// Join the limited words back into a string
	$limitedString = implode(' ', $limitedWords);

	return $limitedString;
}

function getStatusPayment(int $status)
{
	$data = [
		0 => 'Menunggu Pembyaran',
		1 => 'Menunggu Konfirmasi Admin',
		2 => 'Lunas',
		3 => 'Pembayaran Ditolak',
		4 => 'Dibatalkan oleh Pelanggan',
	];
	// $data = [
	// 	0 => 'Menunggu Konfirmasi Admin',
	// 	1 => 'Ditolak',
	// 	2 => 'Lunas',
	// 	3 => 'Menunggu Pembayaran'
	// ];
	return $data[$status];
}

if(!function_exists('generateSlug')){
	function generateSlug($string) {
		// Ubah huruf menjadi huruf kecil
		$slug = strtolower($string);
	
		// Ganti karakter khusus dengan spasi
		$slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
	
		// Ganti beberapa spasi atau tanda hubung dengan satu tanda hubung
		$slug = preg_replace('/[\s-]+/', ' ', $slug);
	
		// Ganti spasi dengan tanda hubung
		$slug = preg_replace('/\s/', '-', $slug);
	
		// Hilangkan tanda hubung di awal dan akhir string
		$slug = trim($slug, '-')."-".rand(1000, 9999);
	
		return $slug;
	}
}

if(! function_exists('getErrorValidation')){

	function getErrorValidation($sessionName,$fieldName)
	{
		if(session()->has($sessionName) && session()->getFlashdata($sessionName) != null){
			$error = session()->getFlashdata($sessionName);
			$error = $error[$fieldName] ?? null;
			return $error;
		}
	}
}
