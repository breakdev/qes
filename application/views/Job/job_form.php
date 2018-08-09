<?php $this->load->view('TemplateAdmin/header'); ?>

<!-- Column -->
<div class="col-lg-8 col-xlg-9 col-md-7">
	<div class="card">
		<div class="card-block">
			<form class="form-horizontal form-material" action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label class="col-md-12">ID STAFF</label>
					<div class="col-md-12">
						<select class="form-control form-control-line" name="id_staff">
                            <?php
							$this->db->select('id_staff');
							$id_staff = $this->db->get('staff');
							foreach($id_staff->result() as $row){
								echo "<option value='".$row->id_staff."'>".$row->id_staff."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">ID COMPANY</label>
					<div class="col-md-12">
						<select class="form-control form-control-line" name="id_perusahaan">
							<?php
							$this->db->select('id_perusahaan');
							$id_perusahaan = $this->db->get('perusahaan');

							foreach($id_perusahaan->result() as $row){
								echo "<option value='".$row->id_perusahaan."'>".$row->id_perusahaan."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="example-email" class="col-md-12">DATE START</label>
					<div class="col-md-12">
						<input type="date" value="<?php echo $tgl_mulai;?>" class="form-control form-control-line" name="tgl_mulai">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">DATE FINISH</label>
					<div class="col-md-12">
						<input type="date" value="<?php echo $tgl_selesai;?>" class="form-control form-control-line" name="tgl_selesai">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">DESC</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $desc;?>"class="form-control form-control-line" name="desc">
					</div>
				</div>
				<input type="hidden" name="id_job" value="<?php echo $id_job; ?>">
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
						<a href="<?php echo site_url('Job') ?>" class="btn btn-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Column -->
<?php $this->load->view('TemplateAdmin/footer'); ?>