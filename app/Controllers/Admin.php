<?php

namespace App\Controllers;

use Exception;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			"cars" => $this->cars->findAll(),
			"assetsPath" => "assets/vuexy/assets/"
		];
		return view('admin/data_kendaraan', $data);
	}
	public function dataKendaraan()
	{
		$data = [
			"cars" => $this->cars->findAll(),
			"assetsPath" => "../assets/vuexy/assets/"
		];
		return view('admin/data_kendaraan', $data);
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
			"nomor_plat" => $this->request->getPost('nomor_plat'),
			"nomor_rangka" => $this->request->getPost('nomor_rangka'),
			"nomor_mesin" => $this->request->getPost('nomor_mesin'),
			"kapasitas_mesin" => $this->request->getPost('kapasitas_mesin'),
			"tipe_bbm" => $this->request->getPost('tipe_bbm'),
			"img" => $randomFilename,
			"status" => "non"
		];
		try {
			$this->cars->insert($data);
			$image->move(ROOTPATH . 'assets/images/car/', $randomFilename);
			return redirect()->to('/admin')->with('success', 'Data kendaraan berhasil ditambahkan');
		} catch (Exception $e) {
			dd($e);
			return redirect()->to('/admin')->with('failed', 'Data kendaraan gagal ditambahkan');
		}
	}

	public function editKendaraan($id)
	{
		$type = $this->request->getGet("type");
		if ($type == "view") {
			$data = [
				"car" => $this->cars->where('idMobil', $id)->first(),
				"assetsPath" => "../../assets/vuexy/assets/"
			];
			return view('admin/edit_kendaraan', $data);
		} else {
			if ($this->request->getMethod() == "post") {
				$image = $this->request->getFile('image');
				try {
					$dataUpdate = [
						"merk" => $this->request->getPost('merk'),
						"pabrikan" => $this->request->getPost('pabrikan'),
						"tahun" => intval($this->request->getPost('tahun')),
						"hargaOne" => $this->request->getPost('hargaOne'),
						"hargaTwo" => $this->request->getPost('hargaTwo'),
						"description" => $this->request->getPost('deskripsi'),
						"nomor_plat" => $this->request->getPost('nomor_plat'),
						"nomor_rangka" => $this->request->getPost('nomor_rangka'),
						"nomor_mesin" => $this->request->getPost('nomor_mesin'),
						"kapasitas_mesin" => $this->request->getPost('kapasitas_mesin'),
						"tipe_bbm" => $this->request->getPost('tipe_bbm'),
						"status" => "non"
					];
					if ($image->getError() == 0) {
						$randomFilename = $image->getRandomName();
						$dataUpdate['img'] = $randomFilename;
						$filePath = ROOTPATH . 'assets/images/car/' . $this->cars->where('idMobil', $id)->first()['img'];
						if (file_exists($filePath)) {
							unlink($filePath);
						}
						$image->move(ROOTPATH . 'assets/images/car/', $randomFilename);
					}
					$this->cars->where('idMobil', $id)->set($dataUpdate)->update();
					return redirect()->to('/admin/editKendaraan/' . $id . '?type=view')->with('success', 'Data kendaraan berhasil diupdate');
				} catch (Exception $e) {
					dd($e);
					return redirect()->to('/admin/editKendaraan/' . $id . '?type=view')->with('failed', 'Data kendaraan gagal diupdate');
				}
			}
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
	public function detailKendaraan($id)
	{
		$data = [
			"car" => $this->cars->where('idMobil', $id)->first(),
			"assetsPath" => "../../assets/vuexy/assets/"
		];
		return view('admin/detail_kendaraan', $data);
	}

	public function dataAdmin()
	{
		$type = $this->request->getGet('type');
		if ($type == "view") {
			$data = [
				"users" => $this->users->findAll(),
				"assetsPath" => "../assets/vuexy/assets/"
			];
			return view('admin/data_admin', $data);
		} else {
			if ($this->request->getMethod() == "post") {
				$nameUser = $this->request->getPost("nameUser");
				$emailUser = $this->request->getPost("emailUser");

				try {
					$this->users->insert([
						'email' => $emailUser,
						'name' => $nameUser,
						'password' => password_hash("kamandaka123", PASSWORD_BCRYPT)
					]);
					return redirect()->to('/admin/dataAdmin/?type=view')->with('success', 'Data Admin berhasil ditambahkan');
				} catch (\Exception $e) {
					//throw $th;
					dd($e);
					return redirect()->to('/admin/dataAdmin/?type=view')->with('failed', 'Data Admin gagal ditambahkan');
				}
			}
		}
	}

	public function editDataAdmin()
	{
		$email = $this->request->getPost('modalEmailUser');
		$name = $this->request->getPost('modalNameUser') ?? null;
		$password = $this->request->getPost('modalPasswordUser') ?? null;

		$tempData = [
			'email' => $email,
			'name' => $name,
			'password' => $password
		];
		$dataToDB = [];
		foreach ($tempData as $key => $value) {
			if ($value != null) {
				$dataToDB[$key] = $value;
			}
			if ($key == 'password' && $value != null) {
				$dataToDB[$key] = password_hash($value, PASSWORD_BCRYPT);
			}
		}
		// dd($dataToDB);
		try {
			$this->users->where('email', $email)->set($dataToDB)->update();
			return redirect()->to('/admin/dataAdmin/?type=view')->with('success', 'Data Admin berhasil diupdate');
		} catch (\Exception $e) {
			//throw $th;
			dd($e);
			return redirect()->to('/admin/dataAdmin/?type=view')->with('failed', 'Data Admin gagal diupdate');
		}
	}

	public function hapusAdmin($email)
	{
		try {
			$this->users->where('email', $email)->delete();
			return redirect()->to('/admin/dataAdmin/?type=view')->with('success', 'Data Admin berhasil dihapus');
		} catch (Exception $e) {
			return redirect()->to('/admin/dataAdmin/?type=view')->with('failed', 'Data Admin gagal dihapus');
		}
	}

	public function getDataAdmin($email)
	{
		$user = $this->users->select("email, name")->where('email', $email)->first();
		$result = [
			'data' => $user
		];
		header('Content-Type: application/json');
		return $this->response->setJSON($result);
	}


	public function getDataSupir($noKtp)
	{
		$user = $this->drivers->where('no_ktp', $noKtp)->first();
		$result = [
			'data' => $user
		];
		header('Content-Type: application/json');
		return $this->response->setJSON($result);
	}
	public function dataSupir()
	{
		$type = $this->request->getGet('type');
		if ($type == "view") {
			$data = [
				"users" => $this->drivers->findAll(),
				"assetsPath" => "../assets/vuexy/assets/"
			];
			return view('admin/data_supir', $data);
		} else {
			if ($this->request->getMethod() == "post") {
				$nameSupir = $this->request->getPost("nameSupir");
				$noKtp = $this->request->getPost("noKtp");
				$noSim = $this->request->getPost("noSim");

				try {
					$this->drivers->insert([
						'name' => $nameSupir,
						'no_ktp' => $noKtp,
						'no_sim' => $noSim,
					]);
					return redirect()->to('/admin/dataSupir/?type=view')->with('success', 'Data Supir berhasil ditambahkan');
				} catch (\Exception $e) {
					//throw $th;
					dd($e);
					return redirect()->to('/admin/dataSupir/?type=view')->with('failed', 'Data Supir gagal ditambahkan');
				}
			}
		}
	}
	public function editDataSupir()
	{
		$noKtp = $this->request->getPost("modalNoKtp");
		$nameSupir = $this->request->getPost("modalNameSupir") ?? null;
		$noSim = $this->request->getPost("modalNoSim") ?? null;

		$tempData = [
			'name' => $nameSupir,
			'no_ktp' => $noKtp,
			'no_sim' => $noSim
		];
		$dataToDB = [];
		foreach ($tempData as $key => $value) {
			if ($value != null) {
				$dataToDB[$key] = $value;
			}
		}
		// dd($dataToDB);
		try {
			$this->drivers->where('no_ktp', $noKtp)->set($dataToDB)->update();
			return redirect()->to('/admin/dataSupir/?type=view')->with('success', 'Data Supir berhasil diupdate');
		} catch (\Exception $e) {
			//throw $th;
			dd($e);
			return redirect()->to('/admin/dataSupir/?type=view')->with('failed', 'Data Supir gagal diupdate');
		}
	}

	public function hapusSupir($noKtp)
	{
		try {
			$this->drivers->where('no_ktp', $noKtp)->delete();
			return redirect()->to('/admin/dataSupir/?type=view')->with('success', 'Data Supir berhasil dihapus');
		} catch (Exception $e) {
			return redirect()->to('/admin/dataSupir/?type=view')->with('failed', 'Data Supir gagal dihapus');
		}
	}


	public function login()
	{
		$query = $this->users->where('email', $this->request->getPost('email'))->first();
	}
}
