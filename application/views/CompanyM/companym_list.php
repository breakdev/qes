<?php $this->load->view('TemplateMember/header'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">COMPANY</h2>
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
							</tr>
						</thead>
						<?php $no=1;?>
						<tbody>
							<?php foreach ($data_companym as $key => $row) { ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $row->id_perusahaan; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->alamat; ?></td>
								<td><?php echo $row->telepon; ?></td>
								<td><?php echo $row->fax; ?></td>
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
