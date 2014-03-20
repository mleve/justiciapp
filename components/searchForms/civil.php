<form>
	<input type="hidden" name="TIP_Consulta" value="2">
	<input type="hidden" name="irAccionAtPublico" value="Consultaee">	
	<?php include('../tribunales/tribCivil.php'); ?>
	<label for="rut">Rut</label>
	<input name="RUT_Consulta" type="text" id="rut" placeholder="Ingrese Rut">-
	<input name="RUT_DvConsulta" type="text" style="width: 20px">
	<br>
	<button type="submit" class="btn btn-default" id="buscarCivil">Buscar</button>
</form>
	
<script type="text/javascript">
	$('form').on("submit",function(event){
		event.preventDefault();
		var data = $(this).serialize();
		$.ajax({
			url : 'components/detailResult.php',
			data : data,
			success : function(response){
				$("#results").html(response);					
			}
		});
		
	});
</script>