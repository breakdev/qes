<?php $this->load->view('TemplateAdmin/header'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">COMPANY</h2>
				<div class="col-md-12 text-right">
					<div style="margin-top: 20px; margin-bottom: 10px;">
						<?php echo anchor(site_url('Company/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Add Data', 'class="btn btn-primary"'); ?>
					</div>
				</div>
				<div class="table-responsive">
					<table id="example" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Id Company</th>
								<th>Name Company</th>
								<th>Address</th>
								<th>Contact No</th>
								<th>Fax</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $no=1;?>
						<tbody>
							<?php foreach ($data_company as $key => $row) { ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $row->id_perusahaan; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->alamat; ?></td>
								<td><?php echo $row->telepon; ?></td>
								<td><?php echo $row->fax; ?></td>
								<td>
									<?php echo anchor(site_url('Company/edit/'.$row->id_perusahaan),
										'<i class="fa fa-pencil"> </i>',
										'class="btn btn-warning"'); ?>
									<?php echo anchor(site_url('Company/delete/'.$row->id_perusahaan),
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
