<?php $this->load->view('templates/header'); ?>
<div class="codes about">
	<div class="container">
		<div class="grid_3 grid_4 team-wthreegrids">
			<h3 class="w3ls-hdg">Our Clients</h3>
			<div class="bs-example w3layouts">
				<div class="row">
				</div>
				<div class="row">
					<table id="example" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Years</th>
								<th>Project Item</th>
								<th>Client</th>
								<th>Location</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_client as $key => $row) { ?>
							<tr>
								<td><?php echo $row->years; ?></td>
								<td><?php echo $row->project_item; ?></td>
								<td><?php echo $row->client; ?></td>
								<td><?php echo $row->location; ?></td>
								<td><?php echo $row->description; ?></td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#example').DataTable();
					});
				</script>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('templates/footer'); ?>