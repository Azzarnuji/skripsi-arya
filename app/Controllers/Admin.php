<?php

namespace App\Controllers;

use Exception;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			"cars" => $this->cars->findAll()
		];
		return view('admin/index', $data);
	}

	public function tambahKendaraan()
	{
		$image = $this->request->getFile('image');
		$randomFilename = $image->getRandomName();
		$data = [
			'idMobil' =>  strtolower($this->request->getPost('merk') . "-" . random_string("alpha", 5)),
			"merk" => $this->request->getPost('merk'),
			"pabrikan" => $this->request->getPost('pabrikan'),
			"tahun" => intval($this->request->getPost('tahun')),
			"hargaOne" => $this->request->getPost('hargaOne'),
			"hargaTwo" => $this->request->getPost('hargaTwo'),
			"description" => $this->request->getPost('deskripsi'),
			"img" => $randomFilename
		];
		try {
			$this->cars->insert($data);
			$image->move(ROOTPATH . 'assets/images/car/', $randomFilename);
			return redirect()->to('/admin')->with('success', 'Data kendaraan berhasil ditambahkan');
		} catch (Exception $e) {
			return redirect()->to('/admin')->with('failed', 'Data kendaraan gagal ditambahkan');
		}
	}
	public function hapusKendaraan($id)
	{
		try {
			unlink(ROOTPATH . 'assets/images/car/' . $this->cars->where('idMobil', $id)->first()['img']);
			$this->cars->where('idMobil', $id)->delete();
			return redirect()->to('/admin')->with('success', 'Data kendaraan berhasil dihapus');
		} catch (Exception $e) {
			return redirect()->to('/admin')->with('failed', 'Data kendaraan gagal dihapus');
		}
	}
}
