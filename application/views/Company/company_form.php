<?php $this->load->view('TemplateAdmin/header'); ?>

<!-- Column -->
<div class="col-lg-8 col-xlg-9 col-md-7">
	<div class="card">
		<div class="card-block">
			<form class="form-horizontal form-material" action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label class="col-md-12">ID COMPANY</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $id_perusahaan;?>" class="form-control form-control-line" name="id_perusahaan">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">NAME COMPANY</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $nama;?>" class="form-control form-control-line" name="nama">
					</div>
				</div>
				<div class="form-group">
					<label for="example-email" class="col-md-12">ADDRESS</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $alamat;?>" class="form-control form-control-line" name="alamat">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">CONTACT NO</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $telepon;?>" class="form-control form-control-line" name="telepon">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">FAX</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $fax;?>"class="form-control form-control-line" name="fax">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
						<a href="<?php echo site_url('Company') ?>" class="btn btn-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Column -->
<?php $this->load->view('TemplateAdmin/footer'); ?>