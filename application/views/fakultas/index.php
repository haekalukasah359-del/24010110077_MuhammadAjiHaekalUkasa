<div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">

	<div class="card-header border-0 text-white py-3"
		style="background: linear-gradient(135deg,#6c757d,#5a6268);">

		<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">

			<div>
				<h4 class="mb-0 fw-bold">
					<i class="bi bi-building me-2"></i>
					Data Fakultas
				</h4>
				<small>Rincian Data fakultas</small>
			</div>

			<a class="btn btn-light fw-semibold px-4"
				href="<?php echo base_url('fakultas/tambah') ?>">
				<i class="bi bi-plus-circle me-1"></i>
				Tambah Fakultas
			</a>

		</div>
	</div>

	<div class="card-body p-4">

		<div class="table-responsive">

			<table id="datatable"
				class="table table-hover align-middle w-100 mb-0">

				<thead>
					<tr>
						<th width="80">No</th>
						<th>ID Fakultas</th>
						<th>Nama Fakultas</th>
						<th width="150" class="text-center">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($fakultas as $key => $value): ?>
						<tr>

							<td>
								<span class="badge bg-primary">
									<?php echo $key + 1 ?>
								</span>
							</td>

							<td>
								<span class="fw-semibold">
									<?php echo $value['fakultas_id'] ?>
								</span>
							</td>

							<td>
								<?php echo $value['fakultas_name'] ?>
							</td>

							<td class="text-center">

								<a class="btn btn-warning btn-sm rounded-pill px-3"
									href="<?php echo base_url('fakultas/ubah/'.$value['fakultas_id']) ?>">
									<i class="bi bi-pencil-square"></i>
								</a>

								<a class="btn btn-danger btn-sm rounded-pill px-3 btn-hapus"
									href="<?php echo base_url('fakultas/hapus/'.$value['fakultas_id']) ?>">
									<i class="bi bi-trash"></i>
								</a>

							</td>

						</tr>
					<?php endforeach ?>
				</tbody>

			</table>

		</div>

	</div>
</div>