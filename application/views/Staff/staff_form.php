<?php $this->load->view('TemplateAdmin/header'); ?>

<!-- Column -->
<div class="col-lg-8 col-xlg-9 col-md-7">
	<div class="card">
		<div class="card-block">
			<form class="form-horizontal form-material" action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label class="col-md-12">ID STAFF</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $id_staff;?>" class="form-control form-control-line" name="id_staff">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">USERNAME</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $user;?>" class="form-control form-control-line" name="user">
					</div>
				</div>
				<div class="form-group">
					<label for="example-email" class="col-md-12">PASSWORD</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $pass;?>" class="form-control form-control-line" name="pass">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">FULL NAME</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $nama;?>" class="form-control form-control-line" name="nama">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">EMAIL ADDRESS</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $email;?>"class="form-control form-control-line" name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">CONTACT NO</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $no_hp;?>"class="form-control form-control-line" name="no_hp">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">POSITION</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $jabatan;?>"class="form-control form-control-line" name="jabatan">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
						<a href="<?php echo site_url('staff') ?>" class="btn btn-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Column -->
<?php $this->load->view('TemplateAdmin/footer'); ?>