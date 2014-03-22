<div class="row clearfix">
    <h1 class="text-center">Resultados encontrados</h1>
    <table class="table" id="resultsHeader">
        <thead>
            <tr>
                <th>ROL</th>
                <th>CARATULADO</th>
                <th>TRIBUNAL/CORTE</th>
            </tr>
        </thead>
    </table>
</div>
<div class="panel-group" id="panel-resBusqueda">
    <?php include 'case/civil.php'; ?>
    <?php include 'case/laboral.php'; ?>
    <?php include 'case/apelaciones.php'; ?>
</div>
<div class="view">
    <!-- Button to trigger modal -->
   

    <!-- Modal -->
    <div class="modal fade" id="modal-container" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel" ">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12" id="modalBody">
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>
<script type="text/javascript">
   $('.helpBtn').on('click',function(event){
       event.preventDefault();
       var url = $(this).attr('data-url');
       $('.modal-title').html($(this).attr('data-title'));
       $.ajax(url)
               .done(function(response){
                   $('#modalBody').html(response);
                   $(this).unbind('click');
               });
       
   }); 
</script>