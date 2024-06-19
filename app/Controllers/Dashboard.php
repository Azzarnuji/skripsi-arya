<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$query = $this->members->where('members.email', $this->session->get('user')['email'])->join('bookings', 'bookings.email = members.email')
			->join('payments', 'payments.booking_id = bookings.booking_id')
			->join('rental', 'rental.idMobil = bookings.idMobil')->get()->getResultArray();
		$data = [
			'dataSewa' => $query,
			"assetsPath" => "assets/vuexy/assets/"
		];
		return view('dashboard/index', $data);
	}
	public function dataSewa()
	{
		$query = $this->members->where('members.email', $this->session->get('user')['email'])->join('bookings', 'bookings.email = members.email')
			->join('payments', 'payments.booking_id = bookings.booking_id')
			->join('rental', 'rental.idMobil = bookings.idMobil')->get()->getResultArray();
		$data = [
			'dataSewa' => $query,
			"assetsPath" => "../assets/vuexy/assets/"
		];
		return view('dashboard/index', $data);
	}
	public function detailSewa()
	{
		$request = \Config\Services::request();

		// Get the last segment of the URI
		$lastSegment = $request->uri->getSegment($request->uri->getTotalSegments());
		// dd($lastSegment);
		$query = $this->members->where('members.email', $this->session->get('user')['email'])->join('bookings', 'bookings.booking_id = "' . $lastSegment . '"')
			->join('payments', "payments.booking_id = bookings.booking_id")
			->join('rental', 'rental.idMobil = bookings.idMobil')->first();
		$data = [
			'dataSewa' => $query,
			"assetsPath" => "../../assets/vuexy/assets/"
		];
		return view('dashboard/detail-sewa', $data);
	}
	public function sewaKendaraan()
	{
		if ($this->request->getMethod() == 'post') {
			$field = $this->request->getPost();
			$buktiBayar = $this->request->getFile('bukti_bayar');
			$randomFilename = $buktiBayar->getRandomName();
			// dd($this->request->getPost());
			$generatePaymentID = "P-" . rand(1000, 9999);
			$generateBookingID = "B-" . rand(1000, 9999);
			$dataPayment = [
				'payment_id' => $generatePaymentID,
				'booking_id' => $generateBookingID,
				'bukti_img' => $randomFilename,
				'wajib_bayar' => $field['total_harga'],
				'status_payment' => "0"
			];
			$dataBooking = [
				'booking_id' => $generateBookingID,
				'email' => $this->session->get('user')['email'],
				'idMobil' => $field['tipe_kendaraan'],
				'pakai_supir' => $field['pakai_supir'],
				'mulai_sewa' => $field['mulai_sewa'],
				'selesai_sewa' => $field['selesai_sewa'],
				'total_hari' => $field['total_hari'],
				'payment_id' => $generatePaymentID
			];
			// dd($dataBooking, $dataPayment);
			$buktiBayar->move(ROOTPATH . 'assets/images/bukti-bayar', $randomFilename);
			$this->payments->save($dataPayment);
			$this->bookings->save($dataBooking);
			return redirect()->to('dashboard');
		} else {
			$data = [
				"assetsPath" => "../assets/vuexy/assets/",
				"list_kendaraan" => $this->cars->findAll()
			];
			return view('dashboard/sewa-kendaraan', $data);
		}
	}
}
