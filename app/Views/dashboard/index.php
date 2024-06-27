<?= $this->extend('template/dashboard-template') ?>
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
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5>Data Sewa Anda</h5>
			<a href="<?= base_url('dashboard/sewaKendaraan') ?>" class="btn btn-primary">Sewa Kendaraan</a>
		</div>
		<div class="card-datatable table-responsive text-nowrap">
			<table class="datatables-basic table" id="sewaTable">
				<thead>
					<tr class="text-nowrap">
						<th>No</th>
						<th>Merk Mobil</th>
						<th>Mulai Sewa</th>
						<th>Selesai Sewa</th>
						<th>Pakai Supir</th>
						<th>Total Hari</th>
						<th>Total Pembayaran</th>
						<th>Status Pembayaran</th>
						<th>Bukti Bayar</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php $i = 1; ?>
					<?php foreach ($dataSewa as $ds) : ?>
						<tr>
							<th scope="row"><?= $i++ ?></th>
							<td><?= $ds['merk'] ?></td>
							<td><?= $ds['mulai_sewa'] ?></td>
							<td><?= $ds['selesai_sewa'] ?></td>
							<td class="text-capitalize"><?= $ds['pakai_supir'] ?? '-' ?></td>
							<td><?= $ds['total_hari'] ?></td>
							<td><?= $ds['wajib_bayar'] ?></td>
							<td><?= getStatusPayment($ds['status_payment']) ?></td>
							<td>
								<a href="<?= base_url() . "/assets/images/bukti-bayar/" .  $ds['bukti_img'] ?>" target="_blank"><?= $ds['bukti_img']; ?></a>
							</td>
							<td>
								<a href="<?= base_url() ?>/dashboard/detailSewa/<?= $ds['booking_id'] ?>" class="btn btn-sm btn-primary">
									Lihat
								</a>
								<a href="<?= base_url() ?>/dashboard/generatePdf/<?= $ds['booking_id'] ?>" class="btn btn-sm btn-secondary">
									Cetak
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#sewaTable').DataTable();
	});
</script>
<?= $this->endSection() ?>