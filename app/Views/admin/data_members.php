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
			<h5>Data Supir</h5>
			<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddSupir">Tambah Supir</button>
		</div>
		<div class="card-datatable table-responsive pt-0">
			<table class="datatables-basic table" id="dataSupir">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>No KTP</th>
						<th>No SIM</th>
                        <th>Address</th>
                        <th>No Handphone</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php $i = 1; ?>
					<?php foreach ($members as $member) : ?>
						<tr>
							<td><?= $i++ ?></td>
							<td><?= $member['nama'] ?></td>
							<td><?= $member['no_ktp'] ?></td>
							<td><?= $member['no_sim'] ?></td>
                            <td><?= $member['address'] ?></td>
                            <td><?= $member['phone'] ?></td>
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
					<h5 class="modal-title" id="modalViewTitle">Edit Data Supir</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= base_url('admin/editDataSupir') ?>" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">No KTP</label>
								<input type="text" name="modalNoKtp" id="modalNoKtp" class="form-control" placeholder="Enter Name">
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Nama Supir</label>
								<input type="text" name="modalNameSupir" id="modalNameSupir" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3" id="passwordUser">
								<label for="nameWithTitle" class="form-label">No SIM</label>
								<input type="text" name="modalNoSim" id="modalNoSim" class="form-control" placeholder="Enter New Password">
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
	<div class="modal fade" id="modalAddSupir" tabindex="-1" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalViewTitle">Tambah Supir</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= base_url('admin/dataSupir') ?>" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">Nama Supir</label>
								<input type="text" name="nameSupir" id="nameSupir" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">No KTP</label>
								<input type="text" name="noKtp" id="noKtp" class="form-control" placeholder="Enter No KTP" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="nameWithTitle" class="form-label">No SIM</label>
								<input type="text" name="noSim" id="noSim" class="form-control" placeholder="Enter No SIM" required>
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
		const dataSupirTable = $('#dataSupir')
		dataSupirTable.DataTable()

		$('#nameUser').on('keyup', (e) => {
			$('#emailUser').val(e.target.value.toLowerCase().replace(/\s/g, "") + "@kamandaka")
		})

		$("#modalViewAndEdit").on('show.bs.modal', async (event) => {
			var button = event.relatedTarget
			var type = button.getAttribute('data-bs-type')
			var noktp = button.getAttribute('data-bs-noktp')
			var apiUrl = $('#html').attr("data-api-url")
			const modalNameSupir = $('#modalNameSupir')
			const modalNoKtp = $('#modalNoKtp')
			const modalNoSim = $('#modalNoSim')
			const request = await fetch(`${apiUrl}/admin/getDataSupir/${noktp}`)
			const response = await request.json()
			modalNameSupir.val(response.data.name)
			modalNoKtp.val(response.data.no_ktp)
			modalNoSim.val(response.data.no_sim)
			if (type == "view") {
				modalNameSupir.attr("readonly", true).attr("disabled", true)
				modalNoKtp.attr("readonly", true).attr("disabled", true)
				modalNoSim.attr("readonly", true).attr("disabled", true)
				$('#btnSubmit').removeClass("d-block").addClass("d-none")
			} else if (type == "edit") {
				modalNameSupir.attr("readonly", false).attr("disabled", false)
				modalNoKtp.attr("readonly", true).attr("disabled", false)
				modalNoSim.attr("readonly", false).attr("disabled", false)
				$('#btnSubmit').removeClass('d-none').addClass('d-block')
			}
		})
	})
</script>
<?= $this->endSection() ?>