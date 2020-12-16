<!--============================= FOOTER =============================-->
<footer style="color:white;">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h5>Contact the Creator</h5>
                <p><i class="fa fa-envelope-o"></i> Email : gilpratama@outlook.com</p>
                <p><i class="fa fa-phone"></i> Phone : +62 811 750 9766</p>

            </div>
        </div>
    </div>
</footer>
<!--//END FOOTER -->
<!-- jQuery, Bootstrap JS. -->
<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
<!-- Plugins -->
<script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
<!-- Subscribe -->
<script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
<!-- Script JS -->
<script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>

<!-- Untuk Datatable -->
<script src="<?php echo base_url(); ?>megaable/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Custom js -->
<script src="<?php echo base_url(); ?>megaable/files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url(); ?>megaable/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    function setMapToForm(latitude, longitude) {
        $('input[name="latitude"]').val(latitude);
        $('input[name="longitude"]').val(longitude);
    }
</script>
</body>

</html>