   </div>
   <hr>
   <footer>
    <p>&copy; Vincent Gabriel 2013</p>
</footer>
</div>
<span id="base_url" class="hidden"><?=base_url()?></span>
<!--/.fluid-container-->
<script src="<?=base_url()?>assets/admin-theme/vendors/jquery-1.9.1.min.js"></script>
<script src="<?=base_url()?>assets/admin-theme/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/admin-theme/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="<?=base_url()?>assets/admin-theme/assets/scripts.js"></script>
<script>
    $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
    </script>
</body>

</html>