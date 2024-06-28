<?= $this->extend('template/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
	<?php if (session()->getFlashdata('success')) : ?>
		<div class="alert alert-success d-flex align-items-center" role="alert">
			<span class="alert-icon text-success me-2">
				<i class="ti ti-check ti-xs"></i>
			</span>
			<?= session()->getFlashdata('success'); ?>
		</div>
	<?php endif; ?>
	<?php if (session()->getFlashdata('failed')) : ?>
		<div class="alert alert-danger d-flex align-items-center" role="alert">
			<span class="alert-icon text-danger me-2">
				<i class="ti ti-ban ti-xs"></i>
			</span>
			<?= session()->getFlashdata('failed'); ?>
		</div>
	<?php endif; ?>
	<div class="card">
		<h5 class="card-header">Edit Kendaraan</h5>
		<div class="card-body">
			<form action="<?= base_url() ?>/admin/editKendaraan/<?= $car['idMobil'] ?>?type=edit" method="post" enctype="multipart/form-data">
				<div class="row g-3">
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start">Merk Kendaraan</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?= $car['merk']; ?>" name="merk">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start">Pabrikan Kendaraan</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?= $car['pabrikan']; ?>" name="pabrikan">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start">Tahun Kendaraan</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?= $car['tahun']; ?>" name="tahun">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<div class="row">
								<label class="col-sm-3 col-form-label text-sm-start">Nomor Plat</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" value="<?= $car['nomor_plat']; ?>" name="nomor_plat">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start">Nomor Rangka</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?= $car['nomor_rangka']; ?>" name="nomor_rangka">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start" for="collapsible-city">Nomor Mesin</label>
							<div class="col-sm-9">
								<input type="text" id="collapsible-city" class="form-control" placeholder="Jackson" value="<?= $car['nomor_mesin']; ?>" name="nomor_mesin">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start" for="collapsible-city">Harga Lepas Kunci</label>
							<div class="col-sm-9">
								<input type="text" id="collapsible-city" class="form-control" placeholder="Jackson" value="<?= $car['hargaTwo']; ?>" name="hargaTwo">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start" for="collapsible-city">Harga All In</label>
							<div class="col-sm-9">
								<input type="text" id="collapsible-city" class="form-control" placeholder="Jackson" value="<?= $car['hargaOne']; ?>" name="hargaOne">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start">Kapasitas Mesin</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Jackson" value="<?= $car['kapasitas_mesin']; ?>" name="kapasitas_mesin">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-sm-3 col-form-label text-sm-start" for="collapsible-address">Tipe BBM</label>
							<div class="col-sm-9">
								<select name="tipe_bbm" id="tipe_bbm" class="form-control select2" required>
									<option value="Solar" <?php if ($car['tipe_bbm'] == 'Solar') echo "selected"; ?>>Solar</option>
									<option value="Bensin" <?php if ($car['tipe_bbm'] == 'Bensin') echo "selected"; ?>>Bensin</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<label class="col-sm-12 col-form-label text-sm-start">Gambar Kendaraan</label>
							<div class="col-sm-12">
								<input class="form-control" name="image" type="file" id="formFile">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<label class="col-sm-12 col-form-label text-sm-start">Deskripsi Kendaraan</label>
							<div class="col-sm-12">
								<textarea name="deskripsi" class="form-control" rows="4" placeholder="1456, Mall Road">
									<?= htmlspecialchars($car['description']); ?>
								</textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="mt-3 d-flex justify-content-end">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>

</div>
<?= $this->endSection() ?>