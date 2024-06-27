<?= $this->extend('template/dashboard-template') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="py-3 mb-4">Halaman Pembayaran</h4>
	<div
		id="wizard-checkout"
		class="bs-stepper wizard-icons wizard-icons-example mb-5"
	>
		<div class="bs-stepper-content border-top">
			<div id="checkout-payment">
				<div class="row">
					<!-- Payment left -->
					<div class="col-xl-4 col-xxl-4">
						<div class="border rounded p-4">
							<!-- Price Details -->
							<h6>Detail Penyewaan</h6>
							<dl class="row">
								<dt class="col-6 fw-normal">Tipe Mobil</dt>
								<dd class="col-6 text-end"><?=$detailPayment['merk'];?></dd>

								<dt class="col-6 fw-normal">Pakai Supir</dt>
								<dd class="col-6 text-end text-capitalize"><?=$detailPayment['pakai_supir'];?></dd>

								<dt class="col-6 fw-normal">Durasi Sewa</dt>
								<dd class="col-6 text-end"><?=$detailPayment['total_hari'];?> Hari</dd>

								<dt class="col-6 fw-normal">Harga @ 1 Hari</dt>
								<dd class="col-6 text-end"><?php echo $detailPayment['pakai_supir'] == 'ya' ? $detailPayment['hargaOne']: $detailPayment['hargaTwo'] ;?></dd>
							</dl>
							<hr class="mx-n4" />
							<dl class="row">
								<dt class="col-6 mb-3">Total</dt>
								<dd class="col-6 fw-medium text-end mb-0">
									<?=$detailPayment['wajib_bayar'];?>
								</dd>

								<dt class="col-12 fw-normal">
									Pembayaran Kepada:
								</dt>
								<dd class="col-12 fw-medium mb-0">
									<span class="badge bg-label-primary"
										>PT. Kamandaka Premium Car
									</span>
								</dd>
							</dl>
							<!-- Address Details -->
							<address class="text-heading">
								<span> Bank Mandiri</span>
								<br />
								<span>A/N PT. Kamandaka Premium Car</span>
								<br />
								<span> 1234567890</span>
							</address>
						</div>
					</div>
					<div class="col-xl-8 col-xxl-8 mb-3 mb-xl-0">
						<!-- Offer alert -->
						<div class="alert alert-danger" role="alert">
							<div class="d-flex gap-3 flex-column">
								<p>
									Pembayaran Hanya Dapat Melalui Bank Transfer
									Ke Bank Mandiri.
									<br />
									Dengan Atas Nama PT.Kamandaka Premium Car
								</p>
							</div>
						</div>

						<!-- Payment Tabs -->
						<div class="col-xxl-12 col-lg-8">
							<form action="<?= base_url('dashboard/payment') ?>" method="post" enctype="multipart/form-data">
								<div class="row mb-3">
									<label
										class="col-sm-12 col-form-label"
										for="multicol-email"
										>Bukti Bayar</label
									>
									<div class="col-sm-12">
										<input
											type="file"
											class="form-control"
											name="bukti_bayar"
											id="bukti_bayar"
										/>
										<input type="text" name="payment_id" id="payment_id" value="<?= $detailPayment['payment_id'] ?>" hidden>
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<button
										type="submit"
										class="btn btn-primary"
									>
										Kirim
									</button>
								</div>
							</form>
						</div>
					</div>
					<!-- Address right -->
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>
