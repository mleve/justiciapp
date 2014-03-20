<table class="table table-striped table-hover" contenteditable="true">
      <thead>
        <tr>
          <th>#</th>
          <th>ROL</th>
          <th>Nombre</th>
          <th>Fecha creación</th>
        </tr>
      </thead>
      <tbody>
      	<tr>
          <td>1</td>
          <td><a role="button" class="btn detailResults" >C-2905-2014</a></td>
          <td>07/03/2014</td>
          <td>VILCHES / ARAYA</td>
		  <!-- Modal -->

        </tr>
		<!--
        <tr class="active">
          <td>1</td>
          <td>TB - Monthly</td>
          <td>01/04/2012</td>
          <td>Approved</td>
        </tr>
        <tr class="success">
          <td>2</td>
          <td>TB - Monthly</td>
          <td>02/04/2012</td>
          <td>Declined</td>
        </tr>
        <tr class="warning">
          <td>3</td>
          <td>TB - Monthly</td>
          <td>03/04/2012</td>
          <td>Pending</td>
        </tr>
        <tr class="danger">
          <td>4</td>
          <td>TB - Monthly</td>
          <td>04/04/2012</td>
          <td>Call in to confirm</td>
        </tr>
		-->
      </tbody>
</table>
<script type="text/javascript">	
	$('.detailResults').on("click",function(event){
		event.preventDefault();
		$.ajax("components/detailResult.php")
		.done(function(result){
			$("#results").html(result);
		});
	});
	
</script>

