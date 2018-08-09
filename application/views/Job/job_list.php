<?php $this->load->view('TemplateAdmin/header'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">JOB</h2>
				<div class="col-md-12 text-right">
					<div style="margin-top: 20px; margin-bottom: 10px;">
						<?php echo anchor(site_url('Job/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Add Data', 'class="btn btn-primary"'); ?>
					</div>
				</div>

				<div class="table-responsive">
					<table id="example" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Id Staff</th>
								<th>Id Company</th>
								<th>Date Start</th>
								<th>Date Finish</th>
								<th>Desc</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $no=1; ?>
						<tbody>
							<?php foreach ($data_job as $key => $row) { ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><a href="<?php echo base_url('Staff/lihat/'.$row->id_staff);?>"><?php echo $row->id_staff; ?></a></td>
								<td><a href="<?php echo base_url('Company/lihat/'.$row->id_perusahaan);?>"><?php echo $row->id_perusahaan; ?></a></td>
								<td><?php echo $row->tgl_mulai; ?></td>
								<td><?php echo $row->tgl_selesai; ?></td>
								<td><?php echo $row->desc; ?></td>
								<td>
									<?php echo anchor(site_url('Job/edit/'.$row->id_job),
										'<i class="fa fa-pencil"> </i>',
										'class="btn btn-warning"'); ?>
									<?php echo anchor(site_url('Job/delete/'.$row->id_job),
										'<i class="fa fa-trash"> </i>',
										'class="btn btn-danger"'); ?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('TemplateAdmin/footer'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable();
		});
	</script>
