<!DOCTYPE html>
<html
	lang="en"
	class="light-style"
	dir="ltr"
	data-theme="theme-default"
	data-assets-path="../../assets/"
	data-template="vertical-menu-template"
>
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
		/>

		<title>Invoice</title>

		<meta name="description" content="" />

		<!-- Favicon -->
		<link
			rel="icon"
			type="image/x-icon"
			href="<?=base_url('assets/images/Logotype.png');?>"
		/>

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
			rel="stylesheet"
		/>

		<!-- Icons -->
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/fonts/fontawesome.css');?>"
		/>
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/fonts/tabler-icons.css');?>"
		/>
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/fonts/flag-icons.css');?>"
		/>

		<!-- Core CSS -->
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/css/rtl/core.css');?>"
			class="template-customizer-core-css"
		/>
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/css/rtl/theme-default.css');?>"
			class="template-customizer-theme-css"
		/>
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/css/demo.css');?>"
		/>

		<!-- Vendors CSS -->
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/libs/node-waves/node-waves.css');?>"
		/>
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css');?>"
		/>
		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/libs/typeahead-js/typeahead.css');?>"
		/>

		<!-- Page CSS -->

		<link
			rel="stylesheet"
			href="<?=base_url('assets/vuexy/assets/vendor/css/pages/app-invoice-print.css');?>"
			media="all"
		/>

		<!-- Helpers -->
		<script src="<?=base_url('assets/vuexy/assets/vendor/js/helpers.js');?>"></script>
		<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
		<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
		<script src="<?=base_url('assets/vuexy/assets/vendor/js/template-customizer.js');?>"></script>
		<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
		<script src="<?=base_url('assets/vuexy/assets/js/config.js');?>"></script>
	</head>

	<body>
		<!-- Content -->

		<div class="invoice-print p-5">
			<div class="d-flex justify-content-between flex-row">
				<div class="mb-4">
					<div class="d-flex svg-illustration mb-3 gap-2">
						<img
							src="<?=base_url('assets/images/Logotype.png');?>"
							style="width: 100px; height: auto"
							alt=""
						/>
					</div>
					<span class="fw-bold text-center mb-2">
						Kamandaka Premium Car
					</span>
					<p class="mb-1">Kp. Cakung, Gg.Mandor</p>
					<p class="mb-1">Jatisari, Jatiasih</p>
					<p class="mb-0">Bekasi, Jawa Barat</p>
				</div>
				<div>
					<h4 class="fw-medium">INVOICE #<?=$dataSewa['payment_id'];?></h4>
					<div class="mb-2">
						<span class="text-muted">Lunas Pada Tanggal:</span>
						<span class="fw-medium"><?=date('d F Y', strtotime($dataSewa['updated_at']));?></span>
					</div>
					<img
							src="<?=base_url('assets/images/paid.png');?>"
							style="width: 200px; height: auto;"
							alt=""
						/>
				</div>
			</div>

			<hr />

			<div class="row d-flex justify-content-between mb-4">
				<div class="col-sm-6 w-100">
					<h6>Invoice Untuk:</h6>
					<p class="mb-1"><?= $dataSewa['nama']; ?></p>
					<p class="mb-1"><?= $dataSewa['email']; ?></p>
					<p class="mb-1"><?= $dataSewa['address']; ?></p>
					<p class="mb-1"><?= $dataSewa['phone']; ?></p>
				</div>
			</div>

			<div class="table-responsive">
				<table class="table m-0">
					<thead class="table-light">
						<tr>
							<th>Tipe Mobil</th>
							<th>Pakai Supir</th>
							<th>Durasi Sewa</th>
							<th>Harga @ 1 Hari</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= $dataSewa['merk']; ?></td>
							<td><?= $dataSewa['pakai_supir']; ?></td>
							<td><?= $dataSewa['total_hari']; ?></td>
							<td><?php echo $dataSewa['pakai_supir'] == 'ya' ? $dataSewa['hargaOne']: $dataSewa['hargaTwo'] ;?></td>
							<td><?= $dataSewa['wajib_bayar']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!-- / Content -->

		<!-- Core JS -->
		<!-- build:js assets/vendor/js/core.js -->

		<script src="<?=base_url('assets/vuexy/assets/vendor/libs/jquery/jquery.js');?>"></script>
		<script src="<?=base_url('assets/vuexy/assets/vendor/libs/popper/popper.js');?>"></script>
		<script src="<?=base_url('assets/vuexy/assets/vendor/js/bootstrap.js');?>"></script>
		<script src="<?=base_url('assets/vuexy/assets/vendor/libs/node-waves/node-waves.js');?>"></script>
		<script src="<?=base_url('assets/vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js');?>"></script>
		<script src="<?=base_url('assets/vuexy/assets/vendor/libs/hammer/hammer.js');?>"></script>
		<script src="<?=base_url('assets/vuexy/assets/vendor/libs/i18n/i18n.js');?>"></script>
		<script src="<?=base_url('assets/vuexy/assets/vendor/libs/typeahead-js/typeahead.js');?>"></script>
		<script src="<?=base_url('assets/vuexy/assets/vendor/js/menu.js');?>"></script>

		<!-- endbuild -->

		<!-- Vendors JS -->

		<!-- Main JS -->
		<script src="<?=base_url('assets/vuexy/assets/js/main.js');?>"></script>

		<!-- Page JS -->
		<script src="<?=base_url('assets/vuexy/assets/js/app-invoice-print.js');?>"></script>
	</body>
</html>
