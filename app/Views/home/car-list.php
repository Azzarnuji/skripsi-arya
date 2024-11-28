<?= $this->extend('template/default.php'); ?>
<?= $this->section('content'); ?>>
<section class="section featured-car" id="ured-car">
	<div class="container">

		<div class="title-wrapper">
			<h2 class="h2 section-title">Daftar Harga</h2>
		</div>

		<ul class="featured-car-list">
			<?php foreach ($daftarRental as $dr) : ?>
				<li>
					<div class="featured-car-card">

						<figure class="card-banner">
							<img src="<?= base_url('/assets/images/car/' . $dr['img']); ?>" alt="<?= $dr['merk']; ?>" loading="lazy" width="440" height="300" class="w-100">
						</figure>

						<div class="card-content">

							<div class="card-title-wrapper">
								<h3 class="h3 card-title">
									<a href="#"><?= $dr['merk']; ?></a>
								</h3>

								<data class="year" value="<?= $dr['tahun']; ?>"><?= $dr['tahun']; ?></data>
							</div>

							<div class="card-price-wrapper">

								<p class="card-price">
									<strong><?= $dr['hargaTwo']; ?></strong> / Day
								</p>

								<button class="btn fav-btn" aria-label="Add to favourite list">
									<ion-icon name="heart-outline"></ion-icon>
								</button>
								<a href="<?= base_url('/rental/' . $dr['idMobil']); ?>" class="btn">Booking</a>


							</div>

						</div>

					</div>
				</li>
			<?php endforeach; ?>
		</ul>
		<hr style="margin-top: 20px;">
		<span style="text-align: center; margin-top: 20px;">Tidak Menemukan Mobil Yang Dicari?</span>
		<a href="https://api.whatsapp.com/send?phone=62811905053&text=Halo%20Admin%20Kamandaka%20Premium%20Car%0ASaya%20Mau%20Informasi%20Lebih%20Tentang%20Daftar%20Mobil%20Yang%20Disewakan" class="btn" style="margin-top: 20px;">Hubungi Admin</a>
	</div>
</section>
<?= $this->endSection(); ?>