<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak Kendaraan</title>
</head>
<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 10px;
	}
</style>
<body>
	<h1>List Penyewa</h1>
	<table class="datatables-basic table" id="dataSupir">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>No KTP</th>
				<th>No SIM</th>
				<th>Address</th>
				<th>No Handphone</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $i = 1; ?>
			<?php foreach ($members as $member) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $member['nama'] ?></td>
					<td><?= $member['no_ktp'] ?></td>
					<td><?= $member['no_sim'] ?></td>
					<td><?= $member['address'] ?></td>
					<td><?= $member['phone'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>