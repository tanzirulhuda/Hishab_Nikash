  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">Appps valley</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ../wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Apps valley -->
<script src="../dist/js/appsvalley.js"></script>
<!-- Chart JS SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<!-- DataTables selected table script -->
<script>
  $(function () {
    $("#customer-list").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#customer-list_wrapper .col-md-6:eq(0)');

    $("#medicine-list").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#medicine-list_wrapper .col-md-6:eq(0)');

    $("#sales-list").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#sales-list_wrapper .col-md-6:eq(0)');

    $("#expire-medicine-report").DataTable({
      "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#expire-medicine-report_wrapper .col-md-6:eq(0)');

    $("#stock-report").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#stock-report_wrapper .col-md-6:eq(0)');

    $("#sales-report").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#sales-report_wrapper .col-md-6:eq(0)');

    $("#purchase-report").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#purchase-report_wrapper .col-md-6:eq(0)');
    
    $("#sales-details").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#sales-details_wrapper .col-md-6:eq(0)');

    $("#customer-details").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#customer-details_wrapper .col-md-6:eq(0)');

    $("#supplier-details").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#supplier-details_wrapper .col-md-6:eq(0)');

    $("#collection-report").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#collection-report_wrapper .col-md-6:eq(0)');

    $("#payment-report").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#payment-report_wrapper .col-md-6:eq(0)');

    $("#employee-report").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#employee-report_wrapper .col-md-6:eq(0)');

    $("#employee-expense").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#employee-expense_wrapper .col-md-6:eq(0)');
  });
</script>
<!-- Select2 Script -->
<script src="../plugins/select2/js/select2.full.js"></script>
<script>
  $(function(){
    $('.select2').select2({
      theme: 'bootstrap4'
    })
  });
</script>
<!-- Semantic UI Script -->
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
<script>
  $("#datePicker").calendar({
    type: "date",
    onChange: function (date, text) {
      var newValue = text;
      var date_container = $("#date_container").val(newValue);
    }
  });
</script>
<!-- Moment JS Script -->
<script src="../plugins/moment/moment.min.js"></script>
<!-- Daterange Picker Script-->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<script>
var autoupdate = true;

function date1(){
$('.date-picker').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true,
  minDate: 'today',
  autoApply: true,
  autoUpdateInput: autoupdate,
  locale: {
    format: 'YYYY-MM-DD'
  }
}, function(chosen_date) {
  $('.date-picker').val(chosen_date.format('YYYY-MM-DD'));
});
  };
date1();

$('.date-picker-2').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true,
  minDate: 'today',
  autoApply: true,
  autoUpdateInput: autoupdate,
  locale: {
    format: 'YYYY-MM-DD'
  }
}, function(chosen_date) {
  $('.date-picker-2').val(chosen_date.format('YYYY-MM-DD'));
});

$('.date-picker').on('apply.daterangepicker', function(ev, picker) {
    if ($('.date-picker').val().length == 0 ){
    autoupdate = true;
    console.log('true');
    date1();
  };
  var departpicker = $('.date-picker').val();
  $('.date-picker-2').daterangepicker({
    minDate: departpicker,
    singleDatePicker: true,
    showDropdowns: true,
    autoApply: true,
    locale: {
      format: 'YYYY-MM-DD'
    }
  });
  
  var drp = $('.date-picker-2').data('daterangepicker');
  drp.setStartDate(departpicker);
  drp.setEndDate(departpicker);
});
</script>
<!-- Custom Script -->
<script>
  $(function(){
    $("#show_cost").on('click', function(){
      $("#cost_price").css("display","block");
      $("#show_cost").css("display", "none");
      $("#hide_cost").css("display","block");
    });
    $("#hide_cost").on("click", function(){
      $("#cost_price").css("display","none");
      $("#show_cost").css("display", "block");
      $("#hide_cost").css("display","none");
    });
  });
</script>
</body>
</html>