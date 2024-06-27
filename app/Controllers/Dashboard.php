<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$query = $this->members->where('penyewa.email', $this->session->get('user')['email'])->join('penyewaan', 'penyewaan.email = penyewa.email')
			->join('pembayaran', 'pembayaran.booking_id = penyewaan.booking_id')
			->join('mobil', 'mobil.idMobil = penyewaan.idMobil')->orderBy('pembayaran.status_payment','ASC')->get()->getResultArray();
		$data = [
			'dataSewa' => $query,
			"assetsPath" => "assets/vuexy/assets/"
		];
		return view('dashboard/index', $data);
	}
	public function dataSewa()
	{
		$query = $this->members->where('penyewa.email', $this->session->get('user')['email'])->join('penyewaan', 'penyewaan.email = penyewa.email')
			->join('pembayaran', 'pembayaran.booking_id = penyewaan.booking_id')
			->join('mobil', 'mobil.idMobil = penyewaan.idMobil')->orderBy('pembayaran.status_payment','ASC')->get()->getResultArray();
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
		$query = $this->members->where('penyewa.email', $this->session->get('user')['email'])->join('penyewaan', 'penyewaan.booking_id = "' . $lastSegment . '"')
			->join('pembayaran', "pembayaran.booking_id = penyewaan.booking_id")
			->join('mobil', 'mobil.idMobil = penyewaan.idMobil')->first();
		$data = [
			'dataSewa' => $query,
			"assetsPath" => "../../assets/vuexy/assets/"
		];
		return view('dashboard/detail-sewa', $data);
	}
	public function sewaKendaraan()
	{
		$type = $this->request->getGet('type');
		if($type == 'payment'){
			
			$detailPayment = $this->bookings->where('penyewaan.booking_id', $this->request->getGet('bookingid'))->join('mobil', 'mobil.idMobil = penyewaan.idMobil')->join('pembayaran', 'pembayaran.booking_id = penyewaan.booking_id')->first();
			// dd($detailPayment);
			$data = [
				"assetsPath" => "../assets/vuexy/assets/",
				"detailPayment" => $detailPayment
			];
			return view('dashboard/payment',$data);
		}
		if($type == 'cancel'){
			$this->bookings->where('booking_id', $this->request->getGet('bookingid'))->delete();
			$this->payments->where('booking_id', $this->request->getGet('bookingid'))->delete();
			return redirect()->to('/dashboard/dataSewa')->with('success', 'Data sewa kendaraan berhasil dibatalkan');
		}
		if ($this->request->getMethod() == 'post') {
			$checkUser = $this->members->where('email', $this->session->get('user')['email'])
			->where('address IS NOT NULL',NULL, false)
			->where('phone IS NOT NULL',NULL, false)
			->where('no_ktp IS NOT NULL',NULL, false)
			->where('no_sim IS NOT NULL',NULL, false)->first();
			if(!$checkUser){ 
				$urlMyProfile = base_url('dashboard/myProfile?tab=setting');
				return redirect()->to('/dashboard/sewaKendaraan')->with('failed', "Data diri anda belum lengkap, Silahkan lengkapi terlebih dahulu di menu <a href='$urlMyProfile'> My Profile</a>")->withInput();
			}
			$field = $this->request->getPost();
			
			// dd($this->request->getPost());
			$generatePaymentID = "P-" . rand(1000, 9999);
			$generateBookingID = "B-" . rand(1000, 9999);
			$dataPayment = [
				'payment_id' => $generatePaymentID,
				'booking_id' => $generateBookingID,
				'wajib_bayar' => $field['total_harga'],
				'status_payment' => "0",
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s')
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
			$this->payments->save($dataPayment);
			$this->bookings->save($dataBooking);
			return redirect()->to('dashboard/sewaKendaraan?type=payment&bookingid=' . $generateBookingID);
		} else {
			$data = [
				"assetsPath" => "../assets/vuexy/assets/",
				"list_kendaraan" => $this->cars->findAll()
			];
			return view('dashboard/sewa-kendaraan', $data);
		}
	}

	public function payment()
	{
		$paymentId = $this->request->getPost('payment_id');
		$buktiBayar = $this->request->getFile('bukti_bayar');
		$randomFilename = $buktiBayar->getRandomName();
		$dataToDB = [
			'bukti_img' => $randomFilename,
			'status_payment' => '1'
		];
		$buktiBayar->move(ROOTPATH . 'assets/images/bukti-bayar', $randomFilename);
		$update = $this->payments->where('payment_id', $paymentId)->set($dataToDB)->update();
		if($update){
			return redirect()->to('/dashboard/dataSewa')->with('success', 'Pembayaran Berhasil Dilakukan, Silahkan Cek Berkala Status Pembayaran Anda');
		}else{
			return redirect()->to('/dashboard/dataSewa')->with('failed', 'Pembayaran Gagal Dilakukan');
		}
	}

	public function myProfile()
	{
		$tab = $this->request->getGet('tab');
		$dataProfile = $this->members->where('email', session()->get('user')['email'])->first();
		$jumlahPenyewaan = $this->bookings->where('email', session()->get('user')['email'])
			->join('pembayaran', 'pembayaran.booking_id = penyewaan.booking_id')->where('pembayaran.status_payment', '2')->get()->getResultArray();
		$data = [
			'dataProfile' => $dataProfile,
			'jmlPenyewaan' => count($jumlahPenyewaan ?? []),
			"assetsPath" => "../assets/vuexy/assets/"
		];
		if($tab == 'setting'){
			return view('dashboard/my-profile-setting', $data);
		}else{
			return view('dashboard/my-profile', $data);
		}
	}

	public function updateProfile()
	{
		if ($this->request->getMethod() == 'post') {
			$fields = $this->request->getPost();
			// dd($fields);
			$valid = $this->validation->setRules([
				'nama_lengkap'=>'required',
				'address'=>'required',
				'no_ktp'=>'required|numeric',
				'no_sim'=>'required|numeric',
				'no_telefon'=>'required|numeric',
			]);
			if(!$valid->run($fields)){
				$this->session->setFlashdata('validation', $valid->getErrors());
				return redirect()->to('/dashboard/myProfile?tab=setting')->withInput();
			}
			$dataToDB = [
				'address'=>$fields['address'],
				'no_ktp'=>$fields['no_ktp'],
				'no_sim'=>$fields['no_sim'],
				'phone'=>$fields['no_telefon'],
				'nama'=>$fields['nama_lengkap']
			];
			$update = $this->members->where('email', session()->get('user')['email'])->set($dataToDB)->update();
			if($update){
				return redirect()->to('/dashboard/myProfile?tab=setting')->with('success', 'Update Profile Berhasil');
			}else{
				return redirect()->to('/dashboard/myProfile?tab=setting')->with('failed', 'Update Profile Gagal');
			}
		}
	}

	public function generatePdf($bookingId)
	{
		$detailSewa = $this->members->where('penyewa.email', $this->session->get('user')['email'])->join('penyewaan', 'penyewaan.booking_id = "' . $bookingId . '"')
			->join('pembayaran', "pembayaran.booking_id = penyewaan.booking_id")
			->join('mobil', 'mobil.idMobil = penyewaan.idMobil')->first();
		
		$data = [
			'dataSewa' => $detailSewa,
		];
		// $domPdf = new \Dompdf\Dompdf(['chroot'=>__DIR__]);
		// $domPdf->getOptions()->setChroot(APPPATH."assets/vuexy/vendor/");
		// $domPdf->loadHtml(view('pdf/generate-pdf'));
		// $domPdf->setPaper('A4', 'potrait');
		// $domPdf->render();

		// return $domPdf->stream('pdf.pdf');
		return view('pdf/generate-pdf',$data);
	}
}
