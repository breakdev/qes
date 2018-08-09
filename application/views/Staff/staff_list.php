<?php $this->load->view('TemplateAdmin/header'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">STAFF</h2>
				<div class="col-md-12 text-right">
					<div style="margin-top: 20px; margin-bottom: 10px;">
						<?php echo anchor(site_url('Staff/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Add Data', 'class="btn btn-primary"'); ?>
					</div>
				</div>
				<div class="table-responsive">
					<table id="example" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>ID</th>
								<th>Username</th>
								<th>Password</th>
								<th>Full Name</th>
								<th>Email Address</th>
								<th>Contact No</th>
								<th>Position</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $no=1; ?>
						<tbody>
							<?php foreach ($data_staff as $key => $row) { ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $row->id_staff; ?></td>
								<td><?php echo $row->user; ?></td>
								<td><?php echo $row->pass; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->no_hp; ?></td>
								<td><?php echo $row->jabatan; ?></td>
								<td>
									<?php echo anchor(site_url('Staff/edit/'.$row->id_staff),
										'<i class="fa fa-pencil"> </i>',
										'class="btn btn-warning"'); ?>
									<?php echo anchor(site_url('Staff/delete/'.$row->id_staff),
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
