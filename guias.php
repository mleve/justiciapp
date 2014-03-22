<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Guias</title>
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
                <div class="panel-group" id="panel-guides">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-guides" href="#panel-guides-civil">Civíl</a>
                        </div>
                        <div id="panel-guides-civil" class="panel-collapse in">
                            <div class="panel-body">
                                <a href="components/guides/civil/arrendamiento.php" class="guideLink" >Arrendamiento</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/civil/cambioNombre.php" class="guideLink" >Cambio de nombre</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/civil/derConsumidor.php" class="guideLink" >Derechos del consumidor</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/civil/testamento.php" class="guideLink" >Testamento</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-guides" href="#panel-guides-familia">Familia</a>
                        </div>
                        <div id="panel-guides-familia" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a href="components/guides/familia/adopcion.php" class="guideLink">Adopción</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/familia/adopcion.php" class="guideLink">Divorcio</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/familia/adopcion.php" class="guideLink">Pension alimenticia</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/familia/adopcion.php" class="guideLink">Violencia Intrafamiliar</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-guides" href="#panel-guides-laboral">Laboral</a>
                        </div>
                        <div id="panel-guides-laboral" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a href="components/guides/laboral/accidentes.php" class="guideLink">Accidentes del trabajo</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/laboral/indemnizacion.php" class="guideLink">Indemnización por despido</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/laboral/ctoTrabajo.php" class="guideLink">Termino contrato trabajo</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/laboral/tribunalesLaborales.php" class="guideLink">Tribunales Laborales</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-guides" href="#panel-guides-penal">penal</a>
                        </div>
                        <div id="panel-guides-penal" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a href="components/guides/penal/abusoSexualMenores.php" class="guideLink">Abuso sexual menores</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/penal/DerechosPenal.php" class="guideLink">Derecho justicia penal</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/penal/reforma.php" class="guideLink">Reforma procesal penal</a>
                            </div>
                            <div class="panel-body">
                                <a href="components/guides/penal/respAdolecente.php" class="guideLink">Responsabilidad penal adolescente</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-8 column" id="guideSection">
                <h2> Guías legales</h2>
                <p>
                    En esta sección te ofrecemos orientación legal, en formato de preguntas y respuestas, simple, claro y consciso.
                </p>

                <h4 class="text-center"> Notas</h4>
                <p>
                    1.- La información aquí contenida es un material de referencia para entender el funcionamiento de las leyes. 
                    En ningún caso debe ser considerada como la ley en sí, doctrina, argumento legal ni sustituto de un abogado. 
                </p>
                <p>
                    2.- Algunas guias son una versión modificada de artículos originalmente publicados por la Biblioteca del congreso nacional 
                    disponible en http://www.bcn.cl/leyfacil  bajo una 
                    licencia de uso Creativecommons (by-sa/3.0/cl)                      
                </p>
                <p>
                    3.-Los presentes recursos son publicados bajo licencia de uso Creativecommons (by-sa/3.0/cl)
                </p>

            </div>
        </div>
        <?php include 'components/footer.php'; ?>
        <script type ="text/javascript">
            $('.guideLink').on('click', function(event) {
                event.preventDefault();
                var url = $(this).attr('href');
                $.ajax(url)
                        .done(function(response) {
                            $('#guideSection').html(response);
                        });

            });
        </script>
    </body>
</html>
