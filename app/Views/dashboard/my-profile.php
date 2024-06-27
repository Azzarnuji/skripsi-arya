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
					<a class="nav-link active" href="<?= base_url('dashboard/myProfile') ?>"
						><i class="ti-xs ti ti-user-check me-1"></i> Profile</a
					>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('dashboard/myProfile?tab=setting') ?>"
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
			<!-- About User -->
			<div class="card mb-4">
				<div
					class="card-body d-flex w-100 justify-content-evenly align-items-start"
				>
					<div>
						<small class="card-text text-uppercase"
							>Data Diri</small
						>
						<ul class="list-unstyled mb-4 mt-3">
							<li class="d-flex align-items-center mb-3">
								<i class="ti ti-user text-heading"></i>
								<span class="fw-medium mx-2 text-heading"
									>Nama Lengkap:</span
								>
								<span><?=$dataProfile['nama'];?></span>
							</li>
							<li class="d-flex align-items-center mb-3">
								<i
									class="fa-solid fa-location-dot mx-1 fa-lg"
								></i>
								<span class="fw-medium mx-2 text-heading"
									>Alamat:</span
								>
								<span><?=$dataProfile['address'];?></span>
							</li>
							<li class="d-flex align-items-center mb-3">
								<i class="ti ti-phone-call"></i>
								<span class="fw-medium mx-2 text-heading"
									>No Telefon:</span
								>
								<span><?=$dataProfile['phone'];?></span>
							</li>
							<li class="d-flex align-items-center mb-3">
								<i class="fa-regular fa-address-card mx-1"></i>
								<span class="fw-medium mx-2 text-heading"
									>No KTP:</span
								>
								<span><?=$dataProfile['no_ktp'];?></span>
							</li>
							<li class="d-flex align-items-center mb-3">
								<i class="fa-regular fa-address-card mx-1"></i>
								<span class="fw-medium mx-2 text-heading"
									>No SIM:</span
								>
								<span><?=$dataProfile['no_sim'];?></span>
							</li>
						</ul>
					</div>
					<div>
						<small class="card-text text-uppercase"
							>Akun Anda</small
						>
						<ul class="list-unstyled mb-4 mt-3">
							<li class="d-flex align-items-center mb-3">
								<i class="ti ti-user text-heading"></i
								><span class="fw-medium mx-2 text-heading"
									>Nama Lengkap:</span
								>
								<span><?=$dataProfile['nama'];?></span>
							</li>
							<li class="d-flex align-items-center mb-3">
								<i class="ti ti-mail"></i>
								<span class="fw-medium mx-2 text-heading"
									>Email:</span
								>
								<span><?=$dataProfile['email'];?></span>
							</li>
						</ul>
					</div>

					<div>
						<small class="card-text text-uppercase"
							>Riwayat Penyewaan</small
						>
						<ul class="list-unstyled mb-4 mt-3">
							<li class="d-flex align-items-center mb-3">
								<i class="fa-solid fa-clipboard-list"></i>
								<span class="fw-medium mx-2 text-heading"
									>Jumlah Penyewaan :</span
								>
								<span><?=$jmlPenyewaan;?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--/ About User -->
			<!-- Profile Overview -->
			<!--/ Profile Overview -->
		</div>
	</div>
	<!--/ User Profile Content -->
</div>
<?= $this->endSection() ?>
