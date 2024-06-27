<?= $this->extend('template/dashboard-template') ?>
<?= $this->section('content') ?>
<div class="container-xxl">
	<div class="card mt-5">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5>Detail Sewa</h5>
			<a href="<?= base_url('dashboard') ?>" class="btn btn-primary">Back</a>
		</div>
		<form class="card-body" action="#" onsubmit="return false;" method="post">
			<h6>1. Detail Akun</h6>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Email</label>
				<div class="col-sm-9">
					<div class="input-group input-group-merge">
						<input type="text" id="multicol-email" class="form-control" name="email" value="<?= $dataSewa['email']; ?>" readonly placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2">
					</div>
				</div>
			</div>
			<hr class="my-4 mx-n4">
			<h6>2. Personal Info</h6>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-full-name">Nama Lengkap</label>
				<div class="col-sm-9">
					<input type="text" id="multicol-full-name" name="nama_lengkap" value="<?= $dataSewa['nama']; ?>" readonly class="form-control" placeholder="John Doe">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-country">Alamat</label>
				<div class="col-sm-9">
					<textarea name="alamat" class="form-control" id="alamat" style="width:100%;" readonly><?= $dataSewa['address']; ?> </textarea>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-phone">Nomor Handphone</label>
				<div class="col-sm-9">
					<input type="text" name="no_hp" class="form-control" value="<?= $dataSewa['phone']; ?>" readonly placeholder="658 799 8941" aria-label="658 799 8941">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-phone">Nomor KTP</label>
				<div class="col-sm-9">
					<input type="text" name="no_ktp" class="form-control" placeholder="No Ktp" value="<?= $dataSewa['no_ktp']; ?>" readonly aria-label="658 799 8941">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-phone">Nomor SIM</label>
				<div class="col-sm-9">
					<input type="text" name="no_sim" class="form-control" placeholder="No SIM" value="<?= $dataSewa['no_sim']; ?>" readonly aria-label="658 799 8941">
				</div>
			</div>
			<hr class="my-4 mx-n4">
			<h6>3. Detail Sewa</h6>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Pakai Supir</label>
				<div class="col-sm-9">
					<div class="form-check mt-3">
						<input name="pakai_supir" class="form-check-input" type="radio" value="ya" id="defaultRadio1" checked>
						<label class="form-check-label text-capitalize" for="defaultRadio1">
							<?= $dataSewa['pakai_supir']; ?>
						</label>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Tipe Kendaraan</label>
				<div class="col-sm-9">
					<select name="tipe_kendaraan" id="tipe_kendaraan" class="form-select select2" data-placeholder="Pilih Kendaraan">
						<option value="<?= $dataSewa['idMobil'] ?>"><?= $dataSewa['merk'] ?></option>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Mulai Sewa</label>
				<div class="col-sm-9">
					<input type="text" class="form-control flatpickr-input" name="mulai_sewa" value="<?= $dataSewa['mulai_sewa']; ?>" readonly placeholder="YYYY-MM-DD" id="start-date">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Selesai Sewa</label>
				<div class="col-sm-9">
					<input type="text" class="form-control flatpickr-input" name="selesai_sewa" value="<?= $dataSewa['selesai_sewa']; ?>" readonly placeholder="YYYY-MM-DD" id="finish-date">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Total Hari</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="total_hari" id="total_hari" value="<?= $dataSewa['total_hari']; ?>" readonly placeholder="0" readonly="readonly">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Total Harga</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="total_harga" id="total_harga" value="<?= $dataSewa['wajib_bayar']; ?>" readonly placeholder="RP. 0" readonly="readonly">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Status Pembayaran</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="total_harga" id="total_harga" value="<?= getStatusPayment($dataSewa['status_payment']); ?>" readonly placeholder="RP. 0" readonly="readonly">
				</div>
			</div>
			<?php if($dataSewa['status_payment'] == 0): ?>
				<div class="pt-4">
					<div class="row justify-content-end">
						<div class="col-sm-9">
							<a href="<?= base_url('dashboard/sewaKendaraan?type=payment&bookingid='.$dataSewa['booking_id']) ?>" class="btn btn-primary waves-effect">Bayar</a>
							<button type="button" class="btn btn-danger waves-effect" onclick="window.askBeforeExecution('Yakin Batalkan ?, Ini Akan Menghapus Data Sewa Anda',()=>{
								window.location.href = '<?= base_url('dashboard/sewaKendaraan?type=cancel&bookingid='.$dataSewa['booking_id']) ?>';
							})">Batalkan</button>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</form>
	</div>
</div>
<?= $this->endSection() ?>