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
		0 => 'Menunggu Konfirmasi Admin',
		1 => 'Ditolak',
		2 => 'Lunas'
	];
	return $data[$status];
}
