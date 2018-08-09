<?php $this->load->view('TemplateAdmin/header');?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">HOME</h2>
				<p>Hallo <?php echo $this->session->userdata('user'); ?> selamat datang di halaman Admin.
				</p>
				
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('TemplateAdmin/footer'); ?>