<?php $this->load->view('TemplateAdmin/header'); ?>

<!-- Column -->
<div class="col-lg-8 col-xlg-9 col-md-7">
	<div class="card">
		<div class="card-block">
			<form class="form-horizontal form-material" action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label class="col-md-12">POSITION NAME</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $position_name;?>" class="form-control form-control-line" name="position_name">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">DESCRIPTION</label>
					<div class="col-md-12">
						<textarea  rows="5" class="form-control form-control-line" name="description"><?php echo htmlspecialchars($description); ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">REQUIREMENTS</label>
					<div class="col-md-12">
						<textarea  rows="5" class="form-control form-control-line" name="requirement"><?php echo htmlspecialchars($requirement); ?></textarea>
					</div>
				</div>
				<input type="hidden" name="id_position" value="<?php echo $id_position; ?>">
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
						<a href="<?php echo site_url('Career') ?>" class="btn btn-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Column -->
<?php $this->load->view('TemplateAdmin/footer'); ?>