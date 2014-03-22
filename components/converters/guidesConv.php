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

        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet">

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

        <script type="text/javascript" src="../../js/jquery.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/scripts.js"></script>
    </head>

<body>
<div class="row clearfix">
    <div class="col-md-12 column">
        <div class="panel-group" id="panel-questions">
    <?php
    $fila = 1;
    if (($gestor = fopen("testamento.csv", "r")) !== FALSE) {
        while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
            $numero = count($datos);
            $fila++;
            echo "\n";
            for ($c = 0; $c < $numero; $c++) {
                if($c==0){
                 echo"\t\t\t\t";
                 echo '<div class="panel panel-default">';
                 echo "\n";
                 echo "\t\t\t\t\t";
                 echo '<div class="panel-heading">';
                 echo "\n";
                 echo "\t\t\t\t\t\t";
                 echo ' <a class="panel-title" data-toggle="collapse" data-parent="#panel-questions" href="#panel-element-'.$fila.'">';
                 echo $datos[$c].'</a>';
                 echo "\n";
                 echo "\t\t\t\t\t";
                 echo '</div>';
                 echo "\n";
                 echo "\t\t\t\t\t";
                 echo '<div id="panel-element-'.$fila.'" class="panel-collapse collapse">';
                 echo "\n";
                 echo "\t\t\t\t\t\t";
                 echo '<div class="panel-body">';
                }
                else{
                    echo "\n";
                    echo "\t\t\t\t\t\t\t";
                    echo "<p>".$datos[$c].'</p>';
                }
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        
        fclose($gestor);
    }
    ?>
        </div>
    </div>
</div>
</tbody>
</body>
</html>