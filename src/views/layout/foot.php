</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="assets/lteadmin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/lteadmin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="assets/lteadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="assets/lteadmin/bower_components/raphael/raphael.min.js"></script>
<script src="assets/lteadmin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/lteadmin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/lteadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/lteadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/lteadmin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/lteadmin/bower_components/moment/min/moment.min.js"></script>
<script src="assets/lteadmin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/lteadmin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/lteadmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/lteadmin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/lteadmin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/lteadmin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/lteadmin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/lteadmin/dist/js/demo.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#table').DataTable();

    $(".open-modal").click(function () {
        $('#pedido').val($(this).data('id'));
        $('#myModal').modal('show');
    });
    $(".open-modal-situacao").click(function () {
        $('#pedido-situacao').val($(this).data('id'));
        $('#myModal2').modal('show');
    });
});
</script>
</body>
</html>
