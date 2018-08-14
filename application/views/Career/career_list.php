<?php $this->load->view('TemplateAdmin/header'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">Career</h2>
				<div class="col-md-12 text-right">
					<div style="margin-top: 20px; margin-bottom: 10px;">
						<?php echo anchor(site_url('Career/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Add Data', 'class="btn btn-primary"'); ?>
					</div>
				</div>

				<div class="table-responsive">
					<table id="example" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Position</th>
								<th>Description</th>
								<th>Requirements</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_career as $key => $row) { ?>
							<tr>
								<td><?php echo $row->id_position; ?></td>
								<td><?php echo $row->position_name; ?></td>
								<td><?php echo $row->description; ?></td>
								<td><?php echo $row->requirement; ?></td>
								<td>
									<?php echo anchor(site_url('Career/edit/'.$row->id_position),
										'<i class="fa fa-pencil"> </i>',
										'class="btn btn-warning"'); ?>
									<?php echo anchor(site_url('Career/delete/'.$row->id_position),
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