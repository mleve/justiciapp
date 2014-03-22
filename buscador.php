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
                <div class="form-group">
                    <label for="trib" >Tipo de causa:</label>
                    <div>
                        <ul>
                            <li>
                                <label>
                                    <input id="trib"  type="radio" name="causa" value="all" checked> Todos
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input name="causa" type="radio" value="civil"> Civil
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="causa" value='laboral'> Laboral
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="causa" value='apelaciones'> C. Apelaciones
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="causa" value='suprema'> C. Suprema
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column" id="searchFormDiv">
                        <?php include('components/searchForms/default.php'); ?>
                    </div>
                </div>
                <div class="row clearfix">
                    <button class="btn btn-default" id="buscarBtn">Buscar</button>
                </div>
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
        $('#buscarBtn').on("click", function(event) {
            event.preventDefault();

            var tribunal = $('input[name=causa]:checked').val();
            var resUrl = '';
            switch (tribunal) {
                case 'all':
                    resUrl = 'components/resultAll.php';
                    break;
                case 'civil':
                    resUrl = 'components/resultCivil.php';
                    break;
                case 'laboral':
                    resUrl = 'components/resultLaboral.php';
                    break;
                case 'apelaciones':
                    resUrl = 'components/resultApelaciones.php';
                    break;
                case 'suprema':
                    resUrl = 'components/resultEmpty.php';
                    break;
                default:
                    resUrl = 'components/resultEmpty.php';
                    break;
            }
            $.ajax(resUrl)
                    .done(function(event) {
                        $("#results").html(event);
                    });

        });
        $('input[name=causa]').on("click", function(event) {
            var value = $(this).val();
            var formUrl = '';
            switch (value) {
                case 'civil':
                    formUrl = 'components/searchForms/civil.php';
                    break;
                case 'laboral':
                    formUrl = 'components/searchForms/laboral.php';
                    break;
                case 'apelaciones':
                    formUrl = 'components/searchForms/apelaciones.php';
                    break;
                default:
                    formUrl = 'components/searchForms/default.php';
            }
            $.ajax(formUrl)
                    .done(function(result) {
                        $('#searchFormDiv').html(result);
                    });
        });


    </script>
</body>
</html>
