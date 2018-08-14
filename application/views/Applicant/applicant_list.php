<?php $this->load->view('TemplateAdmin/header'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
				<h2 class="card-title">Applicants</h2>
				<div class="table-responsive">
					<table id="example" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Nomor HP</th>
								<th>File CV</th>
								<th>Posisi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_applicant as $key => $row) { ?>
							<tr>
								<td><?php echo $row->id_applicant; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->alamat; ?></td>
								<td><?php echo $row->no_hp; ?></td>
								<td><?php echo $row->file_cv; ?></td>
								<td><?php echo $row->id_position; ?></td>
								<td>
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