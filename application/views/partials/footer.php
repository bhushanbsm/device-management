   <hr>
   <footer class="text-center">
   	<p>&copy; Bhushan Manusmare 2018</p>
   </footer>

   <span id="base_url" class="hidden"><?=base_url()?></span>
   <!--/.fluid-container-->
   <script src="<?=base_url()?>assets/admin-theme/vendors/jquery-1.9.1.min.js"></script>
   <script src="<?=base_url()?>assets/admin-theme/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?=base_url()?>assets/admin-theme/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
   <script src="<?=base_url()?>assets/admin-theme/assets/scripts.js"></script>
   <script src="<?=base_url()?>assets/admin-theme/vendors/datatables/js/jquery.dataTables.min.js"></script>
   <script src="<?=base_url()?>assets/admin-theme/assets/DT_bootstrap.js"></script>
   <script src="<?=base_url()?>assets/admin-theme/vendors/chosen.jquery.min.js"></script>
   <script src="<?=base_url()?>assets/admin-theme/vendors/bootstrap-datepicker.js"></script>
   <script src="<?=base_url()?>assets/js/auth.js"></script>
   <script>
   	$(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
    </script>
    <script>
      $(document).ready(function($) {
        $(".chzn-select").chosen();
      });
     </script>
</body>

</html>