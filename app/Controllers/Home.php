<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$sendData = [
			'dataMeta' => $this->anyHelpers->createMeta()->getMeta(),
			'daftarRental' => $this->AdtModel->where('status !=', 'highlight')->findAll(),
			'highlight' => $this->AdtModel->where('status', 'highlight')->first(),
			'reviews' => $this->Reviews->findAll()
		];
		return view('home/index', $sendData);
	}
	public function about()
	{
		$sendData = [
			'dataMeta' => $this->anyHelpers->createMeta('about')->getMeta()
		];
		return view('home/about', $sendData);
	}
	public function rental($id = null)
	{
		if ($id != null) {
			$sendData = [
				'dataMeta' => $this->anyHelpers->createMeta('rental', $id)->getMeta(),
				'id' => $id,
				'rental' => $this->AdtModel->where('idMobil', $id)->first()
			];
			if ($sendData['rental'] == null) {
				return redirect()->to('/');
			} else {

				return view('home/detail', $sendData);
			}
		} else {
			$sendData = [
				'dataMeta' => $this->anyHelpers->createMeta('rental')->getMeta(),
				'highlight' => $this->AdtModel->where('status', 'highlight')->first(),
				'daftarRental' => $this->AdtModel->where('status !=', 'highlight')->findAll()

			];
			return view('home/car-list', $sendData);
		}
	}
	public function booking()
	{
		if ($this->request->getMethod() == 'post') {
			$field = $this->request->getPost();
			// dd($this->request->getPost());
			$buktiBayar = $this->request->getFile('bukti_bayar');
			$randomFilename = $buktiBayar->getRandomName();
			$generatePaymentID = "P-" . rand(1000, 9999);
			$generateBookingID = "B-" . rand(1000, 9999);
			$dataMembers = [
				'email' => $field['email'],
				'password' => password_hash($field['password'], PASSWORD_DEFAULT),
				'nama' => $field['nama_lengkap'],
				'address' => $field['alamat'],
				'phone' => $field['no_hp'],
				'no_ktp' => $field['no_ktp'],
				'no_sim' => $field['no_sim']
			];
			$dataPayment = [
				'payment_id' => $generatePaymentID,
				'booking_id' => $generateBookingID,
				'bukti_img' => $randomFilename,
				'wajib_bayar' => $field['total_harga'],
				'status_payment' => "0"
			];
			$dataBooking = [
				'booking_id' => $generateBookingID,
				'email' => $field['email'],
				'idMobil' => $field['tipe_kendaraan'],
				'pakai_supir' => $field['pakai_supir'],
				'mulai_sewa' => $field['mulai_sewa'],
				'selesai_sewa' => $field['selesai_sewa'],
				'total_hari' => $field['total_hari'],
				'payment_id' => $generatePaymentID
			];
			$buktiBayar->move(ROOTPATH . 'assets/images/bukti-bayar', $randomFilename);
			$this->members->save($dataMembers);
			$this->payments->save($dataPayment);
			$this->bookings->save($dataBooking);
			return redirect()->to('/home/booking')->with('success', 'Booking Berhasil, Silahkan Ke Home dan Lakukan Login');
		} else {
			$data = [
				"assetsPath" => "../assets/vuexy/assets/",
				"list_kendaraan" => $this->cars->findAll()
			];
			return view('/home/booking', $data);
		}
	}

	public function login()
	{
		if ($this->request->getMethod() == 'post') {
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			$user = $this->members->where('email', $email)->first();
			if ($user) {
				if (password_verify($password, $user['password'])) {
					$this->session->set('user', $user);
					return redirect()->to('/dashboard');
				} else {
					return redirect()->to('/home/login')->with('failed', 'Email / Password yang anda masukkan salah');
				}
			} else {
				return redirect()->to('/home/login')->with('failed', 'Email / Password yang anda masukkan salah');
			}
		}
		$data = [
			"assetsPath" => "../assets/vuexy/assets/"
		];
		return view('home/login', $data);
	}
}
