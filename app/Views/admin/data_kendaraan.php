<?= $this->extend('template/admin-template', ['assetsPath' => $assetsPath]) ?>
<?= $this->section('content') ?>
<style>
  /* Remove background color from Quill editor */
  .ql-container {
    background-color: transparent !important; /* Remove background */
  }
  .ql-editor {
    background-color: transparent !important; /* Remove background */
  }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
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
	<div class="card">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5>Data Kendaraan</h5>
			<div class="d-flex flex-column gap-2">
				<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahKendaraan">Tambah Kendaraan</button>
				<a href="<?= base_url('admin/cetakKendaraan') ?>" class="btn btn-success"><i class="ti ti-printer me-2"></i> Cetak</a>
			</div>
		</div>
		<div class="card-datatable table-responsive text-nowrap">
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
						<th>Deskripsi Mobil</th>
						<th>Image</th>
						<th>Action</th>
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
							<td><?= limitWords($car['description'], 20) ?>...</td>
							<td>
								<a href="<?= base_url() . "/assets/images/car/" .  $car['img'] ?>" target="_blank"><?= $car['img']; ?></a>
							</td>
							<td>
								<a class="btn btn-sm btn-secondary" href="<?= base_url() ?>/admin/editKendaraan/<?= $car['idMobil'] . "?type=view" ?>">
									Edit
								</a>
								<a href="<?= base_url() ?>/admin/detailKendaraan/<?= $car['idMobil'] ?>" class="btn btn-sm btn-primary">
									Lihat
								</a>
								<button class="btn btn-sm btn-warning" onclick="window.askBeforeExecution('Yakin Hapus Kendaraan ?',()=>{
									window.location.href = '<?= base_url() ?>/admin/hapusKendaraan/' + '<?= $car['idMobil'] ?>';
								})">
									Hapus
								</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="modal fade" id="modalView" tabindex="-1" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalViewTitle">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Name</label>
							<input type="text" class="form-control" placeholder="Enter Name">
						</div>
					</div>
					<div class="row g-2">
						<div class="col mb-0">
							<label for="emailWithTitle" class="form-label">Email</label>
							<input type="email" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx">
						</div>
						<div class="col mb-0">
							<label for="dobWithTitle" class="form-label">DOB</label>
							<input type="date" id="dobWithTitle" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modalTambahKendaraan" tabindex="-1" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalViewTitle">Tambah Kendaraan</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= base_url('admin/tambahKendaraan') ?>" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Merk Kendaraan</label>
								<input type="text" name="merk" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Pabrikan Kendaraan</label>
								<input type="text" name="pabrikan" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Tahun Kendaraan</label>
								<input type="text" name="tahun" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Nomor Plat</label>
								<input type="text" name="nomor_plat" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Nomor Rangka</label>
								<input type="text" name="nomor_rangka" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Nomor Mesin</label>
								<input type="text" name="nomor_mesin" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Kapasitas Mesin</label>
								<input type="text" name="kapasitas_mesin" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Tipe BBM</label>
								<select name="tipe_bbm" id="tipe_bbm" class="form-control select2" required>
									<option value="Solar">Solar</option>
									<option value="Bensin">Bensin</option>
								</select>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Harga Lepas Kunci</label>
								<input type="text" name="hargaTwo" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Harga All IN</label>
								<input type="text" name="hargaOne" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Deskripsi Kendaraan</label>
								<div id="editor"></div>
								<input name="deskripsi" id="deskripsi" class="form-control" type="hidden" required />
							</div>
							<div class="col-md-12 mb-3">
								<label for="formFile" class="form-label">Foto Kendaraan</label>
								<input class="form-control" name="image" type="file" id="formFile" required>
							</div>
							<div class="row mb-3">
								<label class="col-sm-3 col-form-label" for="multicol-email">Tampil Di Homepage</label>
								<div class="col-sm-9">
									<div class="form-check mt-3">
										<input name="tampil_homepage" class="form-check-input" type="radio" value="ya" id="defaultRadio1">
										<label class="form-check-label" for="defaultRadio1">
											Ya
										</label>
									</div>
									<div class="form-check">
										<input name="tampil_homepage" class="form-check-input" type="radio" value="tidak" id="defaultRadio2">
										<label class="form-check-label" for="defaultRadio2">
											Tidak
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(() => {
		$('#carTable').DataTable()
		var quill = new Quill('#editor', {
			theme: 'snow'
		});
		document.querySelector('form').addEventListener('submit', function(event) {
			var content = quill.root.innerHTML;  // Get HTML content from Quill editor
			document.getElementById('deskripsi').value = content;  // Set the value of the hidden input
		});
	})
</script>
<?= $this->endSection() ?>