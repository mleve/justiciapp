<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Buscador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
	<?php include('components/header.php'); ?>
	<div class="row clearfix">
		<div class="col-md-4 column">
			<h2> Buscador </h2>
			<form role="form" class="">
			  <div class="form-group">
				<label for="trib" >Tipo de causa:</label>
				<div>
					<ul>
						<li>
							<label>
							  <input id="trib" name="causa" type="radio"> Civil
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="causa" > Laboral
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="causa" > C. Apelaciones
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="causa" > C. Suprema
							</label>
						</li>
					</ul>
				</div>
			  </div>
			  <div class="form-group">
				<label for="tribunal">Tribunal</label>
				<select class="form-control" id="tribunal" >
					 <option>1</option>
					 <option>2</option>
				     <option>3</option>
				     <option>4</option>
				     <option>5</option>
				</select>
			  </div>
				<label for="rut">Rut</label>
				<input name="rut" type="text" id="rut" placeholder="Ingrese Rut">-
				<input name="rutVer" type="text" style="width: 20px">
			  <br>
			  
			</form>
			<button type="submit" class="btn btn-default" id="buscar">Buscar</button>
		</div>
		<div class="col-md-8 column" id="results">

			<div class="row clearfix">
				<div class="col-md-12 column">
					<h1> Para comenzar, Busca una causa </h1>
				</div>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript">
	$('#buscar').on("click", function(){
		$.ajax("searchResult.php")
		.done(function(event){
			$("#results").html(event);
		});
	});
</script>
</body>
</html>
