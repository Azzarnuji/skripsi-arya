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
	<h1>List Admin</h1>
	<table class="datatables-basic table" id="dataAdmin">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $i = 1; ?>
			<?php foreach ($users as $user) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $user['name'] ?></td>
					<td><?= $user['email'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>