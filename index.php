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
                <div class="col-md-2"></div>
                <div class="col-md-8 column">
                    <div class="carousel slide" id="carousel-489233">
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#carousel-489233"></li>
                            <li data-slide-to="1" data-target="#carousel-489233" class=""></li>
                            <li data-slide-to="2" data-target="#carousel-489233" class=""></li>
                            <li data-slide-to="3" data-target="#carousel-489233" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="imgForCarousel">
                                    <img alt="" src="img/bienvenido.jpg" >
                                </div>

                                <div class="carousel-caption">
                                    <h4>Bienvenido a EasyJustice</h4>
                                    <p>la plataforma que le permitirá conocer, administrar y enteder sus causas judiciales fácilmente</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="imgForCarousel">
                                    <img alt="" src="img/acceso.jpg">
                                </div>
                                <div class="carousel-caption">
                                    <h4>Acceso a la Justicia</h4>
                                    <p>Porque creemos que los ciudadan@s tenemos derecho a acceder a la justicia de forma transparente, actualizada, gratuita y comprensible.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="imgForCarousel">
                                    <img alt="" src="img/orientacion.jpg">
                                </div>
                                
                                <div class="carousel-caption">
                                    <h4>Orientación</h4>
                                    <p> En EasyJustice tienes acceso a guías legales y a un buscador que te permitirá conocer tus causas,
                                        ademas de diagramas de funcionamiento del juicio, glosarios legales y acceso a leyes oficiales. Todo en un solo lugar.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="imgForCarousel">
                                    <img alt="" src="img/cercano.jpg">
                                </div>
                                
                                <div class="carousel-caption">
                                    <h4>Cercano</h4>
                                    <p>Explicamos en un lenguaje ciudadano, claro y conciso,
                                        ya que estamos convencidos de que la justicia no es solo de los abogados, la justicia es un tema de tod@s.</p>
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-489233" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-489233" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>			
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row clearfix">
                <div class="col-md-6 column">
                    <h3 class="text-center">
                        Buscador de Causas
                    </h3>
                    <p>
                        Nuestro buscador se conecta directamente con los servicios de www.pjud.cl para encontrar tus causas en los siguientes tribunales:
                    </p>
                    <ul>
                        <li> Civiles </li>
                        <li> Laborales y cobranza laboral </li>
                        <li> Penales </li>
                        <li> Corte de Apelaciones </li>
                        <li> Corte Suprema </li>
                    </ul>
                    <p> Ademas, te ofrecemos guiás que te ayuden a entender tus causas </p>
                    <div class="text-center"> <a class="btn btn-primary btn-large" href="buscador.php">Ir al buscador</a> </div>			
                </div>
                <div class="col-md-6 column">
                    <h3 class="text-center">
                        Guias
                    </h3>
                    <p>
                        ¿No sabes como comenzar?, en <strong> EasyJustice</strong> te explicamos.
                    </p>
                    <p>
                        Hemos preparado una serie de guías legales para guiarte en los procesos judiciales mas comunes
                    </p>
                    <div class="text-center"> <a class="btn btn-primary btn-large" href="guias.php">Ir a guiás</a> </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <h3 class="text-center">
                        Disclaimer
                    </h3>
                    <p>
                        El proyecto <strong>EasyJustice</strong> se desarrolla en el marco del 
                        <a target="_blank" href="http://www.derecho.uchile.cl/noticias/97367/primer-concurso-tecnologia-y-acceso-a-la-justicia">primer  concurso de Derecho y Acceso a la Justicia</a>
                         , organizado por el Poder Judicial de la República de Chile
                    </p>
                    <p>
                        <strong>EasyJustice</strong> consulta las bases de datos públicas del Poder Judicial, por tanto en caso de existir causas reservadas dicho contenido no será exhibido.
                    </p>
                    <p>
                        En <strong>EasyJustice</strong> somos respetuosos de sus datos e información personal, por tanto no transferimos de forma alguna su información a terceros, respetando todos los derechos que le confiere la ley 19.628. 
                    </p>
                </div>
            </div>
            <?php include 'components/footer.php'; ?>
        </div>
        <script type="text/javascript">
            $('.carousel-inner').on("click", function() {
                window.location.href = "easyJustice.php";
            });
        </script>
    </body>
</html>
