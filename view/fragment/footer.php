<!-- Vendor: Javascripts --> 
<script src="../assets/js/jquery-2.1.3.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script> 
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap4.js"></script> 
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Our Website Javascripts --> 
<script src="../assets/js/app.js"></script> 
<script src="../assets/js/common.js"></script> 
<script src="../assets/js/home4.js"></script> 
<script src="../assets/js/widgets.js"></script>
<script>
    new DataTable('#patient_list');
    new DataTable('#donation_list');
    new DataTable('#recepient_list');
    new DataTable('#user_list');
    new DataTable('#blood_type_list');
    $( '#select-field' ).select2( {
    theme: 'bootstrap-5'
} );

</script>



</body>

</html>