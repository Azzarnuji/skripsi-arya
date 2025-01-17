<?= $this->extend('template/booking-template', ['assetsPath' => $assetsPath]) ?>
<?= $this->section('content') ?>
<div class="container-xxl">
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
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5>Form Booking</h5>
			<a href="<?= base_url() ?>" class="btn btn-primary">Back</a>
		</div>
		<form class="card-body" action="<?= base_url('home/booking') ?>" method="post" enctype="multipart/form-data">
			<h6>1. Detail Akun</h6>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Email</label>
				<div class="col-sm-9">
					<div class="input-group input-group-merge">
						<input type="text" id="multicol-email" class="form-control" name="email" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2">
						<span class="input-group-text" id="multicol-email2">@example.com</span>
					</div>
				</div>
			</div>
			<div class="row form-password-toggle">
				<label class="col-sm-3 col-form-label" for="multicol-password">Password</label>
				<div class="col-sm-9">
					<div class="input-group input-group-merge">
						<input type="password" id="multicol-password" name="password" class="form-control" placeholder="············" aria-describedby="multicol-password2">
						<span class="input-group-text cursor-pointer" id="multicol-password2"><i class="ti ti-eye-off"></i></span>
					</div>
				</div>
			</div>
			<hr class="my-4 mx-n4">
			<h6>2. Personal Info</h6>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-full-name">Nama Lengkap</label>
				<div class="col-sm-9">
					<input type="text" id="multicol-full-name" name="nama_lengkap" class="form-control" placeholder="John Doe">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-country">Alamat</label>
				<div class="col-sm-9">
					<textarea name="alamat" class="form-control" id="alamat" style="width:100%;"></textarea>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-phone">Nomor Handphone</label>
				<div class="col-sm-9">
					<input type="text" name="no_hp" class="form-control" placeholder="658 799 8941" aria-label="658 799 8941">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-phone">Nomor KTP</label>
				<div class="col-sm-9">
					<input type="text" name="no_ktp" class="form-control" placeholder="No Ktp" aria-label="658 799 8941">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-phone">Nomor SIM</label>
				<div class="col-sm-9">
					<input type="text" name="no_sim" class="form-control" placeholder="No SIM" aria-label="658 799 8941">
				</div>
			</div>
			<hr class="my-4 mx-n4">
			<h6>3. Detail Sewa</h6>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Pakai Supir</label>
				<div class="col-sm-9">
					<div class="form-check mt-3">
						<input name="pakai_supir" class="form-check-input" type="radio" value="ya" id="defaultRadio1">
						<label class="form-check-label" for="defaultRadio1">
							Ya
						</label>
					</div>
					<div class="form-check">
						<input name="pakai_supir" class="form-check-input" type="radio" value="tidak" id="defaultRadio2">
						<label class="form-check-label" for="defaultRadio2">
							Tidak
						</label>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Tipe Kendaraan</label>
				<div class="col-sm-9">
					<select name="tipe_kendaraan" id="tipe_kendaraan" class="form-select select2" data-placeholder="Pilih Kendaraan">
						<option></option>
						<?php foreach ($list_kendaraan as $kendaraan) : ?>
							<option value="<?= $kendaraan['idMobil'] ?>" data-bs-harga-allin="<?= $kendaraan['hargaOne'] ?>" data-bs-harga-standard="<?= $kendaraan['hargaTwo'] ?>"><?= $kendaraan['merk'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Mulai Sewa</label>
				<div class="col-sm-9">
					<input type="text" class="form-control flatpickr-input" name="mulai_sewa" placeholder="YYYY-MM-DD" id="start-date">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Selesai Sewa</label>
				<div class="col-sm-9">
					<input type="text" class="form-control flatpickr-input" name="selesai_sewa" placeholder="YYYY-MM-DD" id="finish-date">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Total Hari</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="total_hari" id="total_hari" placeholder="0" readonly="readonly">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Total Harga</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="total_harga" id="total_harga" placeholder="RP. 0" readonly="readonly">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Bukti Pembayaran</label>
				<div class="col-sm-9">
					<input type="file" class="form-control" name="bukti_bayar" id="bukti_bayar">
				</div>
			</div>
			<div class="pt-4">
				<div class="row justify-content-end">
					<div class="col-sm-9">
						<button type="submit" class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
						<button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	$(document).ready(() => {
		const data = {
			pakai_supir: null,
			total_hari: null,
			total_harga: null,
			tipe_kendaraan: {
				selected_harga_allin: null,
				selected_harga_standard: null
			}
		}
		$('input[name="pakai_supir"]').on('change', (e) => {
			console.log(data);
			const value = $(e.currentTarget).val();
			data.pakai_supir = value;
			$('#total_hari').val(data.total_hari);
			if (data.pakai_supir == 'ya') {
				$('#total_harga').val(window.formatCurrency((data.tipe_kendaraan.selected_harga_allin * data.total_hari)));
			} else if (data.pakai_supir == 'tidak') {
				$('#total_harga').val(window.formatCurrency((data.tipe_kendaraan.selected_harga_standard * data.total_hari)));
			}
		})
		$('#tipe_kendaraan').on('select2:select', (e) => {
			const selectedOption = $(e.currentTarget).find('option:selected');
			const hargaAllIn = selectedOption.attr('data-bs-harga-allin');
			const hargaStandard = selectedOption.attr('data-bs-harga-standard');
			$('#total_hari').val(data.total_hari);
			data.tipe_kendaraan.selected_harga_allin = window.cleanCurrencyString(hargaAllIn);
			data.tipe_kendaraan.selected_harga_standard = window.cleanCurrencyString(hargaStandard);
			if (data.pakai_supir == 'ya') {
				$('#total_harga').val(window.formatCurrency((data.tipe_kendaraan.selected_harga_allin * data.total_hari)));
			} else if (data.pakai_supir == 'tidak') {
				$('#total_harga').val(window.formatCurrency((data.tipe_kendaraan.selected_harga_standard * data.total_hari)));
			}
			// $('#result').text('Selected Option Attribute: ' + attributeValue)
		})
		$('#start-date').flatpickr({
			monthSelectorType: 'static'
		});
		$('#finish-date').flatpickr({
			monthSelectorType: 'static'
		})
		$('#start-date').on('change', (e) => {
			const value = $(e.currentTarget).val();
			const totalHari = window.getDifferenceInDays(value, $('#finish-date').val());
			data.total_hari = totalHari;
			$('#total_hari').val(data.total_hari);
			if (data.pakai_supir == 'ya') {
				data.total_harga = window.formatCurrency((data.tipe_kendaraan.selected_harga_allin * totalHari));
				$('#total_harga').val(window.formatCurrency((data.tipe_kendaraan.selected_harga_allin * data.total_hari)));
			} else if (data.pakai_supir == 'tidak') {
				data.total_harga = window.formatCurrency((data.tipe_kendaraan.selected_harga_standard * totalHari));
				$('#total_harga').val(window.formatCurrency((data.tipe_kendaraan.selected_harga_standard * data.total_hari)));
			}
		})
		$('#finish-date').on('change', (e) => {
			const value = $(e.currentTarget).val();
			const totalHari = window.getDifferenceInDays($('#start-date').val(), value);
			data.total_hari = totalHari;
			$('#total_hari').val(data.total_hari);
			if (data.pakai_supir == 'ya') {
				data.total_harga = window.formatCurrency((data.tipe_kendaraan.selected_harga_allin * totalHari));
				$('#total_harga').val(window.formatCurrency((data.tipe_kendaraan.selected_harga_allin * data.total_hari)));
			} else if (data.pakai_supir == 'tidak') {
				data.total_harga = window.formatCurrency((data.tipe_kendaraan.selected_harga_standard * totalHari));
				$('#total_harga').val(window.formatCurrency((data.tipe_kendaraan.selected_harga_standard * data.total_hari)));
			}
		})


	})
</script>
<?= $this->endSection() ?>