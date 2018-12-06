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
						<div class="muted pull-left">List of All Sites</div>
					</div>
					<div class="block-content collapse in">
						<div class="span12">
                           <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                              <thead>
                                 <tr>
                                    <th>Organization</th>
                                    <th>Site Name</th>
                                    <th>Floar Plan</th>
                                    <th>address</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php foreach ($all_sites as $key => $site) { ?>
                                <tr class="odd gradeX">
                                   <td><?=$site['name']?></td>
                                   <td><?=$site['site_name']?></td>
                                   <td><?=$site['floar_name']?></td>
                                   <td><?=$site['address'].", ".$site['city'].",".$site['district'].",".$site['state']?></td>
                               </tr>
                           <?php } ?>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
       <!-- /block -->
   </div>

   <div class="row-fluid">
      <!-- block -->
      <div class="block">
         <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">List of All Device Types</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">

               <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Device Type</th>
                        <th>Date Created</th>
                    </tr>
                </thead>
                <tbody>
                 <?php foreach ($all_device_types as $key => $device) { ?>
                    <tr class="odd gradeX">
                       <td><?=$device['device_id']?></td>
                       <td><?=$device['types']?></td>
                       <td><?=$device['dateCreated']?></td>
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


<?php $this->load->view('partials/footer');
