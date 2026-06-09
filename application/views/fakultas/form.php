<div class="row">
	<div class="col-md-6">
		<div class="card shadow border-0 mb-4">

			<div class="card-header bg-secondary text-white d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
				<div>
					<h5 class="mb-0 fw-bold">
						<?php echo isset($button) && $button === 'Update' ? 'Ubah Fakultas' : 'Tambah Fakultas'; ?>
					</h5>
				</div>

				<a class="btn btn-light" href="<?php echo base_url('fakultas') ?>">
					BACK
				</a>
			</div>

			<div class="card-body">

				<form action="<?php echo $action; ?>" method="post" novalidate>

					<div class="mb-3">
						<label for="fakultas_id" class="form-label">
							Id_Fakultas
						</label>

						<input
							type="number"
							name="fakultas_id"
							id="fakultas_id"
							class="form-control <?php echo form_error('fakultas_id') ? 'is-invalid' : (isset($_POST['fakultas_id']) ? 'is-valid' : ''); ?>"
							value="<?php echo set_value('fakultas_id', isset($fakultas['fakultas_id']) ? $fakultas['fakultas_id'] : ''); ?>"
							placeholder="Silahkan masukkan id_fakultas">

						<?php if (form_error('fakultas_id')): ?>
							<div class="invalid-feedback">
								<?php echo form_error('fakultas_id'); ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="mb-3">
						<label for="fakultas_name" class="form-label">
							Nama_Fakultas
						</label>

						<input
							type="text"
							name="fakultas_name"
							id="fakultas_name"
							class="form-control <?php echo form_error('fakultas_name') ? 'is-invalid' : (isset($_POST['fakultas_name']) ? 'is-valid' : ''); ?>"
							value="<?php echo set_value('fakultas_name', isset($fakultas['fakultas_name']) ? $fakultas['fakultas_name'] : ''); ?>"
							placeholder="Silahkan masukkan nama fakultas">

						<?php if (form_error('fakultas_name')): ?>
							<div class="invalid-feedback">
								<?php echo form_error('fakultas_name'); ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="d-flex gap-2">
						<button type="submit" class="btn btn-primary">
							<?php echo isset($button) ? $button : 'SAVE'; ?>
						</button>

						<a href="<?php echo base_url('fakultas') ?>" class="btn btn-secondary">
							CANCEL
						</a>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>