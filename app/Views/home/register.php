<?= $this->extend('template/login-template') ?>

<?= $this->section('content') ?>

<div class="container-xxl">
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
	<div class="authentication-wrapper authentication-basic container-p-y">
		<div class="authentication-inner py-4">
			<!-- Login -->
			<div class="card">
				<div class="card-body">
					<!-- Logo -->
					<div class="app-brand justify-content-center mb-4 mt-2">
						<a href="index.html" class="app-brand-link gap-2">
							<span class="app-brand-logo demo">
								<svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
									<path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
									<path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
								</svg>
							</span>
							<span class="app-brand-text demo text-body fw-bold ms-1">Kamandaka Premium Car</span>
						</a>
					</div>
					<!-- /Logo -->
					<h4 class="mb-1 pt-2">Buat Akun</h4>
					<p class="mb-4">Please sign up to create your account and start the adventure</p>

					<form id="formAuthentication" class="mb-3" action="<?= base_url('home/register?type=register'); ?>" method="POST">
						<div class="mb-3">
							<label for="email" class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Enter your name" autofocus />
							<small class="text-danger"><?= getErrorValidation("validation",'name'); ?></small>
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email or Username</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username" />
							<small class="text-danger"><?= getErrorValidation("validation",'email'); ?></small>
						</div>
						<div class="mb-3 form-password-toggle">
							<div class="d-flex justify-content-between">
								<label class="form-label" for="password">Password</label>
							</div>
							<div class="input-group input-group-merge">
								<input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
								<span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
							</div>
							<small class="text-danger"><?= getErrorValidation('validation','password'); ?></small>
						</div>
						<div class="mb-3 d-flex flex-column gap-3">
							<button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>
							<span>
								Sudah punya akun? <a href="<?= base_url('home/login'); ?>">Login</a>
							</span>
						</div>
					</form>

				</div>
			</div>
			<!-- /Register -->
		</div>
	</div>
</div>

<?= $this->endSection() ?>