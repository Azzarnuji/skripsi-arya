<?= $this->extend('template/default') ?>
<?= $this->section('content') ?>
<?php
$text = "Halo Admin  Kamandaka Premium Car" . PHP_EOL .
	"Merk : " . strtoupper($rental['pabrikan']) . PHP_EOL .
	"Unit : " . strtoupper($id . " " . $rental['tahun']) . PHP_EOL .
	"Apakah Ready?";
$textEncode = urlencode($text);
?>
<div class="container">
	<div class="row" style="margin-bottom: 20px;">
		<div class="col-12 d-flex justify-content-center">
			<img src="<?= base_url('assets/images/car/' . $rental['img']) ?>" class="img-detail" alt="<?= $rental['merk']; ?>" srcset="">
		</div>
		<div class="col-12 d-flex justify-content-center">

			<span class="p-detail"><?= $rental['pabrikan']; ?></span>
		</div>
		<div class="col-12 d-flex justify-content-center">

			<h1 class="h2 hero-text"><?= $rental['merk']; ?></h1>
		</div>
		<hr>
		<div class="col-12 d-flex justify-content-center">
			<ul class="featured-car-list">
				<li>
					<div class="featured-car-card">
						<div class="card-content">
							Harga
							<div class="card-price-wrapper">
								<p class="card-price">
									<strong>ALL IN : <?= $rental['hargaOne']; ?></strong>
									<br>
									<strong>Lepas Kunci : <?= $rental['hargaTwo']; ?></strong>
								</p>

							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="featured-car-card">
						<div class="card-content">
							Terms and Conditions
							<div class="card-price-wrapper">
								<p> - ALL IN : Unit, Driver, BBM, Tol, Parkir (No Valet)<br>
									- All prices are exclude PPN 10%<br>
									- Dalkot : Dalam Kota </p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="col-12 d-flex justify-content-center" style="margin-top: 20px;">
			<a href="https://api.whatsapp.com/send?phone=62811905053&text=<?= $textEncode; ?>" class="btn">Booking Sekarang</a>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-12  d-flex justify-content-center" style="margin-top: 20px;">

			<h2 class="h2 hero-text" style="text-align: center;">Keunggulan Rental Mobil <?= $rental['merk']; ?> Di Kamandaka Premium Car</h2>
		</div>
		<div class="col-12 d-flex justify-content-start">
			<h2>Rental Mobil <?= $rental['merk']; ?> Murah</h2>

		</div>
		<div class="col-12 d-flex justify-content-start" style="margin-bottom: 20px;">
			<p>
				<?= $rental['description']; ?>
			</p>

		</div>

	</div>
</div>










<?= $this->endSection(); ?>