<?php $this->load->view('TemplateAdmin/header'); ?>

<!-- Column -->
<div class="col-lg-8 col-xlg-9 col-md-7">
	<div class="card">
		<div class="card-block">
			<form class="form-horizontal form-material" action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label class="col-md-12">YEARS</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $years;?>" class="form-control form-control-line" name="years">
					</div>
				</div>
				<div class="form-group">
					<label for="example-email" class="col-md-12">PROJECT ITEM</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $project_item;?>" class="form-control form-control-line" name="project_item">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">CLIENT</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $client;?>" class="form-control form-control-line" name="client">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">LOCATION</label>
					<div class="col-md-12">
						<input type="text" value="<?php echo $location;?>"class="form-control form-control-line" name="location">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">DESCRIPTION</label>
					<div class="col-md-12">
						<textarea value="<?php echo $description;?>" rows="5" class="form-control form-control-line" name="description"></textarea>
					</div>
				</div>
				<input type="hidden" name="id_client" value="<?php echo $id_client; ?>">
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
						<a href="<?php echo site_url('clientm') ?>" class="btn btn-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Column -->
<?php $this->load->view('TemplateAdmin/footer'); ?>