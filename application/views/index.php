<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar')?>

<div class="container-fluid">
	<div class="row-fluid">
		<!--/span-->
		<div class="span9" id="content">
			<div class="row-fluid">
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="breadcrumb">
							<i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
							<i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
							<li>
								<a href="#">Dashboard</a> <span class="divider">/</span>	
							</li>
							<li>
								<a href="#">Settings</a> <span class="divider">/</span>	
							</li>
							<li class="active">Tools</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<!-- block -->
				<div class="block">
					<div class="navbar navbar-inner block-header">
						<div class="muted pull-left">Statistics</div>
						<div class="pull-right"><span class="badge badge-warning">View More</span>

						</div>
					</div>
					<div class="block-content collapse in">
						<div class="span3">
							<div class="chart" data-percent="73">73%</div>
							<div class="chart-bottom-heading"><span class="label label-info">Visitors</span>

							</div>
						</div>
						<div class="span3">
							<div class="chart" data-percent="53">53%</div>
							<div class="chart-bottom-heading"><span class="label label-info">Page Views</span>

							</div>
						</div>
						<div class="span3">
							<div class="chart" data-percent="83">83%</div>
							<div class="chart-bottom-heading"><span class="label label-info">Users</span>

							</div>
						</div>
						<div class="span3">
							<div class="chart" data-percent="13">13%</div>
							<div class="chart-bottom-heading"><span class="label label-info">Orders</span>

							</div>
						</div>
					</div>
				</div>
				<!-- /block -->
			</div>
		</div>
	</div>
</div>


<?php $this->load->view('partials/footer');
