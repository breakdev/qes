<?php $this->load->view('TemplateMember/header');?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">HOME</h2>
				<p>Hallo <?php echo $this->session->userdata('user'); ?> Selamat Datang
				</p>
				
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('TemplateMember/footer'); ?>