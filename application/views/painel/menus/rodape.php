  </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/painel/vendor/jquery/jquery.min.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url('assets/painel/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url('assets/painel/vendor/metisMenu/metisMenu.min.js') ?>"></script>

<!-- Morris Charts JavaScript -->
<!--        <script src="<?= base_url('assets/painel/vendor/raphael/raphael.min.js') ?>"></script>
<script src="<?= base_url('assets/painel/vendor/morrisjs/morris.min.js') ?>"></script>
<script src="<?= base_url('assets/painel/data/morris-data.js') ?>"></script>-->

<!-- Custom Theme JavaScript -->
<script src="<?= base_url('assets/painel/dist/js/sb-admin-2.js') ?>"></script>
<!-- DataTables JavaScript -->
    <script src="<?= base_url('assets/painel/vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/painel/vendor/datatables-plugins/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/painel/vendor/datatables-responsive/dataTables.responsive.js')?>"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    
    <script>
    $(document).ready(function () {

        $('#dataTables-example').DataTable({
            "responsive": true,
            "searching": false,
            "ordering": false,
            "language": {
                "lengthMenu": "Exibir _MENU_ por página",
                "zeroRecords": "Nenhum resultado encontrado.",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum dado disponível",
                "infoFiltered": "(filtrado de um total de _MAX_ dados)",
                "search": "Pesquisar",
                "paginate": {
                    "first": "Primeira página",
                    "last": "Ultima página",
                    "next": "Próximo",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>
</body>
</html>
