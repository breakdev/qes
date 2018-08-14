<?php $this->load->view('TemplateAdmin/header'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">CONTACT</h2>
				<div class="table-responsive">
					<table id="example" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Date</th>
								<th>Full Name</th>
								<th>Contact No</th>
								<th>Email Address</th>
								<th>Service Interest</th>
								<th>Feedback</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $no=1; ?>
						<tbody>
							<?php foreach ($data_contact as $key => $row) { ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $row->date; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->hp; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->service; ?></td>
								<td><?php echo $row->feed; ?></td>
								<td>
									<?php echo anchor(site_url('Contact/delete/'.$row->id_contact),
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
