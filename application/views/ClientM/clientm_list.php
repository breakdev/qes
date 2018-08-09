<?php $this->load->view('TemplateMember/header'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">CLIENT</h2>
				<div class="col-md-12 text-right">
					<div style="margin-top: 20px; margin-bottom: 10px;">
						<?php echo anchor(site_url('Clientm/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Add Data', 'class="btn btn-primary"'); ?>
					</div>
				</div>
				<div class="table-responsive">
					<table id="example" class="table">
						<thead>
							<tr>
								<th>Years</th>
								<th>Project Item</th>
								<th>Client</th>
								<th>Location</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_clientm as $key => $row) { ?>
							<tr>
								<td><?php echo $row->years; ?></td>
								<td><?php echo $row->project_item; ?></td>
								<td><?php echo $row->client; ?></td>
								<td><?php echo $row->location; ?></td>
								<td><?php echo $row->description; ?></td>
								<td>
									<?php echo anchor(site_url('Clientm/edit/'.$row->id_client),
										'<i class="fa fa-pencil"> </i>',
										'class="btn btn-warning"'); ?>
									<?php echo anchor(site_url('Clientm/delete/'.$row->id_client),
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
	<?php $this->load->view('TemplateMember/footer'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable();
		});
	</script>
