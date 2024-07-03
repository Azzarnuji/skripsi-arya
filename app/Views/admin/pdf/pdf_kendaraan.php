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
	<h1>List Kendaraan</h1>
	<table class="datatables-basic table" id="carTable">
		<thead>
			<tr class="text-nowrap">
				<th>No</th>
				<th>Id Mobil</th>
				<th>Merk Mobil</th>
				<th>Pabrikan Mobil</th>
				<th>Nomor Plat</th>
				<th>Tahun Mobil</th>
				<th>Harga Lepas Kunci</th>
				<th>Harga All IN</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $i = 1; ?>
			<?php foreach ($cars as $car) : ?>
				<tr>
					<th scope="row"><?= $i++ ?></th>
					<td><?= $car['idMobil'] ?></td>
					<td><?= $car['merk'] ?></td>
					<td><?= $car['pabrikan'] ?></td>
					<td><?= $car['nomor_plat'] ?></td>
					<td><?= $car['tahun'] ?? '-' ?></td>
					<td><?= $car['hargaTwo'] ?></td>
					<td><?= $car['hargaOne'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>