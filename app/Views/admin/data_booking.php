<?= $this->extend('template/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
	<div class="card">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5>List Data Sewa</h5>
			<a href="<?= base_url('admin/cetakBooking') ?>" class="btn btn-success"><i class="ti ti-printer me-2"></i> Cetak</a>
		</div>
		<div class="card-datatable table-responsive text-nowrap">
			<table class="datatables-basic table" id="sewaTable">
				<thead>
					<tr class="text-nowrap">
						<th>No</th>
						<th>Nama Penyewa</th>
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
							<td><?= $ds['nama'] ?></td>
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
								<a href="<?= base_url() ?>/admin/detailBooking/<?= $ds['booking_id'] ?>" class="btn btn-sm btn-primary">
									Lihat
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