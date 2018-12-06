<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar')?>

<div class="container-fluid">
	<div class="row-fluid">
		<!--/span-->
		<div class="span9" id="content">

			<div class="row-fluid">
				<!-- block -->
				<div class="block">
					<div class="navbar navbar-inner block-header">
						<div class="muted pull-left">List of Devices on Site</div>
					</div>
					<div class="block-content collapse in">
						<div class="span12">
							<div class="table-toolbar">
								<form action="<?=base_url('search_by_implementor')?>" name="search_by_implementor" method="POST">
									<div class="btn-group">
										<label class="control-label" for="select01">Select Implementor</label>
										<div class="controls">
											<?=form_dropdown('implementor', $all_implementor,$implementor_id, 'id="implementor" class="chzn-select"')?>
										</div>
									</div>
									<div class="btn-group">
										<label class="control-label" for="date01">Date From</label>
										<div class="controls">
											<input type="text" class="input-xlarge datepicker" name="from" value="<?=$from?>" autocomplete="off" data-date-format="yyyy-mm-dd">
										</div>
									</div>
									<div class="btn-group">
										<label class="control-label" for="date01">Date To</label>
										<div class="controls">
											<input type="text" class="input-xlarge datepicker" name="to" value="<?=$to?>" autocomplete="off" data-date-format="yyyy-mm-dd">
										</div>
									</div>
									<div class="btn-group">
										<button class="btn btn-success" value="1" type="submit" name="submit" id="search">Search</button>
									</div>
								</form>
								<div class="btn-group pull-right">
									<button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="#" id="pdfExport">Save as PDF</a></li>
										<li><a href="#" id="csvExport">Export to CSV</a></li>
									</ul>
								</div>
							</div>

							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Site Name</th>
										<th>Organization</th>
										<th>Floar Plan</th>
										<th>address</th>
										<th>Installed On</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($search_by_implementor as $key => $implementor) { ?>
										<tr class="odd gradeX">
											<td><?=$implementor['site_name']?></td>
											<td><?=$implementor['name']?></td>
											<td><?=$implementor['floar_name']?></td>
											<td><?=$implementor['address'].", ".$implementor['city'].",".$implementor['district'].",".$implementor['state']?></td>
											<td><?=$implementor['dateInstalled']?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /block -->
			</div>

		</div>
	</div>
</div>


<?php $this->load->view('partials/footer')?>
