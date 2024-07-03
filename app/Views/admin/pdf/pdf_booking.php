<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak Booking</title>
</head>
<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 10px;
	}
</style>
<body>
	<h1>List Data Sewa</h1>
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
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>