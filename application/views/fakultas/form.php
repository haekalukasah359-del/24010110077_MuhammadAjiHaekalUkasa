<div class="row justify-content-center">
	<div class="col-md-7">
		<div class="card shadow-lg border-0 rounded-4 mb-4">

			<div class="card-header border-0 text-white rounded-top-4"
				style="background: linear-gradient(135deg,#4e73df,#224abe);">

				<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">

					<div>
						<h4 class="mb-0 fw-bold">
							<i class="fas fa-university me-2"></i>
							<?php echo isset($button) && $button === 'Update' ? 'Ubah Fakultas' : 'Tambah Fakultas'; ?>
						</h4>
					</div>

					<a class="btn btn-light fw-semibold px-4"
						href="<?php echo base_url('fakultas') ?>">
						<i class="fas fa-arrow-left me-1"></i> Back
					</a>

				</div>
			</div>

			<div class="card-body p-4">

				<form action="<?php echo $action; ?>" method="post" novalidate>

					<div class="mb-4">
						<label for="fakultas_id" class="form-label fw-semibold">
							ID Fakultas
						</label>

						<input
							type="number"
							name="fakultas_id"
							id="fakultas_id"
							class="form-control form-control-lg shadow-sm <?php echo form_error('fakultas_id') ? 'is-invalid' : (isset($_POST['fakultas_id']) ? 'is-valid' : ''); ?>"
							value="<?php echo set_value('fakultas_id', isset($fakultas['fakultas_id']) ? $fakultas['fakultas_id'] : ''); ?>"
							placeholder="Masukkan ID Fakultas">

						<?php if (form_error('fakultas_id')): ?>
							<div class="invalid-feedback">
								<?php echo form_error('fakultas_id'); ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="mb-4">
						<label for="fakultas_name" class="form-label fw-semibold">
							Nama Fakultas
						</label>

						<input
							type="text"
							name="fakultas_name"
							id="fakultas_name"
							class="form-control form-control-lg shadow-sm <?php echo form_error('fakultas_name') ? 'is-invalid' : (isset($_POST['fakultas_name']) ? 'is-valid' : ''); ?>"
							value="<?php echo set_value('fakultas_name', isset($fakultas['fakultas_name']) ? $fakultas['fakultas_name'] : ''); ?>"
							placeholder="Masukkan Nama Fakultas">

						<?php if (form_error('fakultas_name')): ?>
							<div class="invalid-feedback">
								<?php echo form_error('fakultas_name'); ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="d-flex gap-2">
						<button type="submit" class="btn btn-primary px-4">
							<i class="fas fa-save me-1"></i>
							<?php echo isset($button) ? $button : 'SAVE'; ?>
						</button>

						<a href="<?php echo base_url('fakultas') ?>"
							class="btn btn-outline-secondary px-4">
							<i class="fas fa-times me-1"></i>
							Cancel
						</a>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>