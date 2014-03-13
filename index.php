<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NOMBREAPLICACION</title>
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
<div class="container">
	<?php include('components/header.php'); ?>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="jumbotron well">
				<h1 class="text-center">
					Bienvenido!
				</h1>
				<p>
					This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<h3 class="text-center">
				Guias
			</h3>
			<p>
				¿No sabes como comenzar?, en <strong> NOMBREAPLICACION</strong> te explicamos.
			</p>
			<p>
				Hemos preparado una serie de guías legales para guiarte en los procesos judiciales mas comunes
			</p>
			<div class="text-center"> <a class="btn btn-primary btn-large" href="guias.php">Ir a guiás</a> </div>
				
		</div>
		<div class="col-md-6 column">
			<h3 class="text-center">
				Buscador de Causas
			</h3>
			<p>
				Nuestro buscador se conecta directamente con los servicios de www.pjud.cl para encontrar tus causas en los siguientes tribunales:
			</p>
			<ul>
				<li> Civiles </li>
				<li> Corte de Apelaciones </li>
				<li> Laborales </li>
				<li> Corte Suprema </li>
			</ul>
			<p> Ademas, te ofrecemos guiás que te ayuden a entender tus causas </p>
			<div class="text-center"> <a class="btn btn-primary btn-large" href="buscador.php">Ir al buscador</a> </div>			
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Disclaimer
			</h3>
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column text-right">
			 <address> <strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
		</div>
	</div>
</div>
</body>
</html>
