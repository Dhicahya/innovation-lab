 <!-- Bootstrap core JavaScript-->
 <script src="/vendor/jquery/jquery.min.js"></script>
 <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="/vendor/chart.js/Chart.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="/js/demo/chart-area-demo.js"></script>
 <script src="/js/demo/chart-pie-demo.js"></script>

 <script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
 <script src=" https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
 <script src=" https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js "></script>

 <script type="text/javascript">
    $(document).ready(function() {
        $('#categoryTable').DataTable();
    });
</script>

<script>
    function deleteData(url) {
        if (confirm("Yakin?")) {
            window.location.href = url;
        }
    }
</script>