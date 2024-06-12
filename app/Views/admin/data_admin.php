<?= $this->extend('template/admin-template', ['assetsPath' => $assetsPath]) ?>
<?= $this->section('content') ?>
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
			<h5>Data Admin</h5>
			<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddAdmin">Tambah Admin</button>
		</div>
		<div class="card-datatable table-responsive pt-0">
			<table class="datatables-basic table" id="dataAdmin">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php $i = 1; ?>
					<?php foreach ($users as $user) : ?>
						<tr>
							<td><?= $i++ ?></td>
							<td><?= $user['name'] ?></td>
							<td><?= $user['email'] ?></td>
							<td>
								<a class="btn btn-sm btn-secondary text-white" data-bs-toggle="modal" data-bs-target="#modalViewAndEdit" data-bs-email="<?= $user['email']; ?>" data-bs-type="edit">
									Edit
								</a>
								<a data-bs-toggle="modal" data-bs-target="#modalViewAndEdit" data-bs-email="<?= $user['email']; ?>" data-bs-type="view" class="btn btn-sm btn-primary text-white">
									Lihat
								</a>
								<button class="btn btn-sm btn-warning" onclick="window.askBeforeExecution('Yakin Hapus Data ?',()=>{
									window.location.href = '<?= base_url() ?>/admin/hapusAdmin/' + '<?= $user['email'] ?>';
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
	<div class="modal fade" id="modalViewAndEdit" tabindex="-1" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalViewTitle">Edit Data Admin</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= base_url('admin/editDataAdmin') ?>" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Email User</label>
								<input type="text" name="modalEmailUser" id="modalEmailUser" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Nama User</label>
								<input type="text" name="modalNameUser" id="modalNameUser" class="form-control" placeholder="Enter Name">
							</div>
							<div class="col-md-12 mb-3" id="passwordUser">
								<label for="nameWithTitle" class="form-label">Password User</label>
								<input type="password" name="modalPasswordUser" class="form-control" placeholder="Enter New Password">
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary waves-effect waves-light" id="btnSubmit">Save changes</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modalAddAdmin" tabindex="-1" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalViewTitle">Tambah Admin</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= base_url('admin/dataAdmin') ?>" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Nama User</label>
								<input type="text" name="nameUser" id="nameUser" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Email User</label>
								<input type="text" name="emailUser" id="emailUser" class="form-control" placeholder="Enter Name" required>
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
		const dataAdminTable = $('#dataAdmin')
		dataAdminTable.DataTable()

		$('#nameUser').on('keyup', (e) => {
			$('#emailUser').val(e.target.value.toLowerCase().replace(/\s/g, "") + "@kamandaka")
		})

		$("#modalViewAndEdit").on('show.bs.modal', async (event) => {
			var button = event.relatedTarget
			var type = button.getAttribute('data-bs-type')
			var email = button.getAttribute('data-bs-email')
			var apiUrl = $('#html').attr("data-api-url")
			const emailUser = $('#modalEmailUser')
			const nameUser = $('#modalNameUser')
			const passwordUser = $('#passwordUser')
			const request = await fetch(`${apiUrl}/admin/getDataAdmin/${email}`)
			const response = await request.json()
			nameUser.val(response.data.name)
			emailUser.val(response.data.email)
			if (type == "view") {
				emailUser.attr("readonly", true).attr("disabled", true)
				nameUser.attr("readonly", true).attr("disabled", true)
				passwordUser.removeClass("d-block").addClass("d-none")
				$('#btnSubmit').removeClass("d-block").addClass("d-none")
			} else if (type == "edit") {
				emailUser.attr("readonly", true).attr("disabled", false)
				nameUser.attr("readonly", false).attr("disabled", false)
				passwordUser.removeClass('d-none').addClass('d-block')
				$('#btnSubmit').removeClass('d-none').addClass('d-block')
			}
			console.log(type);
		})
	})
</script>
<?= $this->endSection() ?>