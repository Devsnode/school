</div>
</div> <!-- container -->
</div> <!-- content -->
<footer class="footer text-right">
    2016 © Zircos.
</footer>
</div>
</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>

<!-- Counter js  -->
<script src="<?php echo base_url(); ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/counterup/jquery.counterup.min.js"></script>

<!--Morris Chart-->
<script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="<?php echo base_url(); ?>assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>
<script src="<?php echo base_url(); ?>assets/js/alertify.min.js"></script>

<!--Ajax call for Make multiple-->

<script>

    $(function () {
        $('.make_multiple_page').on('click', function () {
            var val = $(this).val();
            var id = $(this).attr('attr');
            $.ajax({
                url: "<?php echo base_url('make-multipages') ?>" + '/' + id + '/' + val,
                success: function (data) {
                    alertify.success('<span style=color:#fff;>' + data + '</span>');
                }
            });
        });
    });

</script>

</body>
</html>
