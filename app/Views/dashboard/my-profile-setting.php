<?= $this->extend('template/dashboard-template') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="py-3 mb-4">
		<span class="text-muted fw-light">User Profile /</span> Profile
	</h4>

	<!-- Header -->
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="user-profile-header-banner">
					<img
						src="../assets/vuexy/assets/img/pages/profile-banner.png"
						alt="Banner image"
						class="rounded-top"
					/>
				</div>
				<div
					class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4"
				>
					<div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
						<img
							src="../assets/vuexy/assets/img/avatars/14.png"
							alt="user image"
							class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img"
						/>
					</div>
					<div class="flex-grow-1 mt-3 mt-sm-5">
						<div
							class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4"
						>
							<div class="user-profile-info">
								<h4><?=$dataProfile['nama'];?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ Header -->

	<!-- Navbar pills -->
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills flex-column flex-sm-row mb-4">
				<li class="nav-item">
					<a
						class="nav-link"
						href="<?= base_url('dashboard/myProfile') ?>"
						><i class="ti-xs ti ti-user-check me-1"></i> Profile</a
					>
				</li>
				<li class="nav-item">
					<a
						class="nav-link active"
						href="<?= base_url('dashboard/myProfile?tab=setting') ?>"
						><i class="fa-solid fa-gear me-1"></i> Setting</a
					>
				</li>
			</ul>
		</div>
	</div>
	<!--/ Navbar pills -->

	<!-- User Profile Content -->
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12">
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
			<div class="card mb-4">
				<h5 class="card-header">Perbarui Profile</h5>
				<!-- Account -->
				<div class="card-body">
					<hr class="my-0" />
					<div class="card-body">
						<form
							id="formAccountSettings"
							method="POST"
							action="<?= base_url('dashboard/updateProfile') ?>"
						>
							<div class="row">
								<div class="mb-3 col-md-12">
									<label for="nama_lengkap" class="form-label"
										>Nama Lengkap</label
									>
									<input
										class="form-control"
										type="text"
										id="nama_lengkap"
										name="nama_lengkap"
										value="<?=$dataProfile['nama'];?>"
										required
									/>
								</div>
								<div class="mb-3 col-md-6">
									<label for="address" class="form-label"
										>Alamat</label
									>
									<input
										class="form-control"
										type="text"
										name="address"
										id="address"
										placeholder="Masukkan Alamat Anda"
										value="<?=$dataProfile['address'];?>"
										required
									/>
									<small class="text-danger"><?= getErrorValidation('validation','address'); ?></small>
								</div>
								<div class="mb-3 col-md-6">
									<label for="no_ktp" class="form-label"
										>No KTP</label
									>
									<input
										class="form-control"
										type="text"
										id="no_ktp"
										name="no_ktp"
										placeholder="Masukkan No KTP Anda"
										value="<?=$dataProfile['no_ktp'];?>"
										required
									/>
									<small class="text-danger"><?= getErrorValidation('validation','no_ktp'); ?></small>
								</div>
								<div class="mb-3 col-md-6">
									<label for="no_sim" class="form-label"
										>No SIM</label
									>
									<input
										type="text"
										class="form-control"
										id="no_sim"
										name="no_sim"
										placeholder="Masukkan No SIM Anda"
										value="<?=$dataProfile['no_sim'];?>"
										required
									/>
									<small class="text-danger"><?= getErrorValidation('validation','no_sim'); ?></small>
								</div>
								<div class="mb-3 col-md-6">
									<label class="form-label" for="no_telefon"
										>Nomor Telefon</label
									>
									<input
										type="text"
										id="no_telefon"
										name="no_telefon"
										class="form-control"
										placeholder="08xxxxx"
										value="<?=$dataProfile['phone'];?>"
										required
									/>
									<small class="text-danger"><?= getErrorValidation('validation','no_telefon'); ?></small>
								</div>
								
							</div>
							<div class="mt-2">
								<button
									type="submit"
									class="btn btn-primary me-2"
								>
									Save changes
								</button>
								<button
									type="reset"
									class="btn btn-label-secondary"
								>
									Cancel
								</button>
							</div>
						</form>
					</div>
					<!-- /Account -->
				</div>
			</div>
		</div>
		<!--/ User Profile Content -->
	</div>
	<?= $this->endSection() ?>
</div>
