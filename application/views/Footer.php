    <footer><p>All right reserved. Template by: <a href="https://webthemez.com/admin-template/">WebThemez.com</a> Modified by sheila novita</p>
                
        
                </footer>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?= base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
    
    <!-- Bootstrap Js -->
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    
    <script src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
    
    <!-- Metis Menu Js -->
    <script src="<?= base_url('assets/js/jquery.metisMenu.js'); ?>"></script>
    <!-- Morris Chart Js -->
    <script src="<?= base_url('assets/js/morris/raphael-2.1.0.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/morris/morris.js'); ?>"></script>
    
    
    <script src="<?= base_url('assets/js/easypiechart.js'); ?>"></script>
    <script src="<?= base_url('assets/js/easypiechart-data.js'); ?>"></script>
    
     <script src="<?= base_url('assets/js/Lightweight-Chart/jquery.chart.js'); ?>"></script>

      <!-- DATA TABLE SCRIPTS -->
    <script src="<?= base_url('assets/js/dataTables/jquery.dataTables.js'); ?>"></script>
    <script src="<?= base_url('assets/js/dataTables/dataTables.bootstrap.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    
    <!-- Custom Js -->
    <script src="<?= base_url('assets/js/custom-scripts.js'); ?>"></script> 

    <script src="<?= base_url('assets/js/') ?>sweetalert2.all.min.js"></script>

    <script>
                const flashdata = $('.flash-data').data('flashdata');
                if(flashdata){
                   Swal.fire({
                      title: 'Data',
                      text: 'Berhasil ' + flashdata,
                      icon: 'success'
                   });
                }
                $('.tombol-hapus').on('click', function(e){
                   e.preventDefault();
                   const href = $(this).attr('href');

                   Swal.fire({
                     title: 'Anda Yakin?',
                     text: "Data Akan di Hapus!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#3085d6',
                     cancelButtonColor: '#d33',
                     confirmButtonText: 'Hapus Data!'
                   }).then((result) => {
                     if (result.value) {
                       document.location.href = href;
                     }
                   })
                })
             
    </script>
 

</body>

</html>