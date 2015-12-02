<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema de Apoio ao Diagnóstico Médico</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">


        <script type="text/javascript" src="https://www.google.com/jsapi"></script>


        <!-- Gráfico Google Charts -->

        <script type="text/javascript">
            google.load('visualization', '1', {'packages': ['geochart']});
            google.setOnLoadCallback(drawVisualization);

            function drawVisualization() {

                var data = new google.visualization.DataTable();

                data.addColumn('number', 'Lat');
                data.addColumn('number', 'Long');
                data.addColumn('number', 'Value');
                data.addColumn({type: 'string', role: 'tooltip'});

                data.addRows([[-30.030634, -51.230523, 312, 'Gripe Aviária']]);
                data.addRows([[-29.382417, -50.879048, 43, 'Depressão']]);


                var options = {
                    colorAxis: {colors: ['orange', 'red']},
                    legend: 'none',
                    backgroundColor: {fill: 'transparent', stroke: '#FFF', strokeWidth: 0},
                    datalessRegionColor: '#f5f5f5',
                    displayMode: 'markers',
                    enableRegionInteractivity: 'true',
                    resolution: 'provinces',
                    sizeAxis: {minValue: 1, maxValue: 1, minSize: 5, maxSize: 5},
                    region: 'BR',
                    keepAspectRatio: true,
                    magnifyingGlass: {enable: true, zoomFactor: 7.5},
                    width: 900,
                    height: 500,
                    tooltip: {textStyle: {color: '#444444'}}
                };
                var chart = new google.visualization.GeoChart(document.getElementById('visualization'));



                chart.draw(data, options);

            }
        </script>

    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Iniciar</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">Você</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#sintomas">Sintomas</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#doencas">Diagnóstico</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#incidencia">Incidência</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contato</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1>Sistema de Apoio ao Diagnóstico Médico</h1>
                    <hr>

                    <a href="#about" class="btn btn-primary btn-xl page-scroll">Iniciar</a>
                </div>
            </div>
        </header>

        <form action="index_original.php" method="get">

            <section class="bg-primary" id="about">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <h2 class="section-heading">Quem é você?</h2>
                            <hr class="light">
                            <p class="text-faded">Forneça as suas informações básicas para que possamos iniciar!</p>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Nome</span>
                                <input type="text" class="form-control" placeholder="Digite seu nome" aria-describedby="basic-addon1" name="nome">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Idade</span>
                                <input type="text" class="form-control" placeholder="Digite sua idade" aria-describedby="basic-addon1" name="idade">
                            </div>
                            <div class="input-group">
                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">Masculino</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">Feminino</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section id="sintomas">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">Quais os seus sintomas?</h2>
                            <hr class="primary">
                            <p>Informe ao menos um sintoma para que possamos verificar!</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">

                                <div class="btn-group">
                                    <h3>Sintoma</h3>
                                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                                    <p>
                                        <select name=sintoma1>
                                            <option value=""></option>
                                            <?php
                                            require(".\database\conecta.inc");
                                            conecta_bd() or die("Não é possível conectar-se ao servidor.");

                                            $resultado = mysql_query("Select * from sintoma") or die("Não é possível consultar sintomas.");
                                            while ($linha = mysql_fetch_array($resultado)) {
                                                $CodigoS = $linha["codigo"];
                                                $NomeS = $linha["nome"];
                                                print("<option value='$CodigoS'>$NomeS</option>");
                                            }
                                            ?>
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <div class="btn-group">
                                    <h3>Sintoma</h3>
                                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                                    <p>
                                        <select name=sintoma2>
                                            <option value=""></option>
                                            <?php
                                            $resultado2 = mysql_query("Select * from sintoma") or die("Não é possível consultar sintomas.");
                                            while ($linha2 = mysql_fetch_array($resultado2)) {
                                                $CodigoS2 = $linha2["codigo"];
                                                $NomeS2 = $linha2["nome"];
                                                print("<option value='$CodigoS2'>$NomeS2</option>");
                                            }
                                            ?>
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <div class="btn-group">
                                    <h3>Sintoma</h3>
                                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                                    <p>
                                        <select name=sintoma3>
                                            <option value=""></option>
                                            <?php
                                            $resultado3 = mysql_query("Select * from sintoma") or die("Não é possível consultar sintomas.");
                                            while ($linha3 = mysql_fetch_array($resultado3)) {
                                                $CodigoS3 = $linha3["codigo"];
                                                $NomeS3 = $linha3["nome"];
                                                print("<option value='$CodigoS3'>$NomeS3</option>");
                                            }
                                            ?>
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <div class="btn-group">
                                    <h3>Sintoma</h3>
                                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                                    <p>
                                        <select name=sintoma4>
                                            <option value=""></option>
                                            <?php
                                            $resultado4 = mysql_query("Select * from sintoma") or die("Não é possível consultar sintomas.");
                                            while ($linha4 = mysql_fetch_array($resultado4)) {
                                                $CodigoS4 = $linha4["codigo"];
                                                $NomeS4 = $linha4["nome"];
                                                print("<option value='$CodigoS4'>$NomeS4</option>");
                                            }
                                            ?>
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">

                                <div class="btn-group">
                                    <h3>Sintoma</h3>
                                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                                    <p>
                                        <select name=sintoma5>
                                            <option value=""></option>
                                            <?php
                                            $resultado5 = mysql_query("Select * from sintoma") or die("Não é possível consultar sintomas.");
                                            while ($linha5 = mysql_fetch_array($resultado5)) {
                                                $CodigoS5 = $linha5["codigo"];
                                                $NomeS5 = $linha5["nome"];
                                                print("<option value='$CodigoS5'>$NomeS5</option>");
                                            }
                                            ?>
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <div class="btn-group">
                                    <h3>Sintoma</h3>
                                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                                    <p>
                                        <select name=sintoma6>
                                            <option value=""></option>
                                            <?php
                                            $resultado6 = mysql_query("Select * from sintoma") or die("Não é possível consultar sintomas.");
                                            while ($linha6 = mysql_fetch_array($resultado6)) {
                                                $CodigoS6 = $linha6["codigo"];
                                                $NomeS6 = $linha6["nome"];
                                                print("<option value='$CodigoS6'>$NomeS6</option>");
                                            }
                                            ?>
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <div class="btn-group">
                                    <h3>Sintoma</h3>
                                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                                    <p>
                                        <select name=sintoma7>
                                            <option value=""></option>
                                            <?php
                                            $resultado7 = mysql_query("Select * from sintoma") or die("Não é possível consultar sintomas.");
                                            while ($linha7 = mysql_fetch_array($resultado7)) {
                                                $CodigoS7 = $linha7["codigo"];
                                                $NomeS7 = $linha7["nome"];
                                                print("<option value='$CodigoS7'>$NomeS7</option>");
                                            }
                                            ?>
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <div class="btn-group">
                                    <h3>Sintoma</h3>
                                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                                    <p>
                                        <select name=sintoma8>
                                            <option value=""></option>
                                            <?php
                                            $resultado8 = mysql_query("Select * from sintoma") or die("Não é possível consultar sintomas.");
                                            while ($linha8 = mysql_fetch_array($resultado8)) {
                                                $CodigoS8 = $linha8["codigo"];
                                                $NomeS8 = $linha8["nome"];
                                                print("<option value='$CodigoS8'>$NomeS8</option>");
                                            }
                                            ?>
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container text-center">
                        <div class="call-to-action">
                            <br>
                            <br>
                            <br>
                            <input type= "submit" value="Verificar!" href="#doencas" class="btn btn-primary btn-xl tada"> 
                        </div>
                    </div>
                </div>

            </section>
        </form>


        <section class="bg-primary" id="doencas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Diagnóstico Aproximado</h2>
                        <hr class="light">
                        <p class="text-faded">Veja aqui o diagnóstico aproximado baseado em seus sintomas!</p>
                        <br>
                        <h2>
                            <?php
                            if ($_GET['sintoma1'] == null) {
                                $sint_combo1 = "Invalido";
                            } else {
                                $sint_combo1 = $_GET['sintoma1'];
                            }
                            
                            $doenca_principal = "Insira os sintomas para pesquisarmos!";
                            $doenca1 = mysql_query("SELECT * FROM doenca") or die("Não é possível consultar sintomas.");
                            while ($linhaDoenca = mysql_fetch_array($doenca1)) {
                                $doenca_sintoma1 = $linhaDoenca ["sintoma_1"];
                                if ($doenca_sintoma1 == $sint_combo1) {
                                    $doenca_principal = $linhaDoenca ["nome"];
                                } else {
                                    $doenca_principal = "Doenca nao encontrada!";
                                }
                            }

                            //Imprime o nome da doença.
                            echo $doenca_principal;
                            ?>

                        </h2>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-dark" id="incidencia">

            <div class="container text-center">
                <h2>Incidência de Doenças</h2>
                <hr class="primary">
                <p class="text-faded">Verifique a incidência de doenças na sua região!</p>
                <br>
                <div id="visualization" style="margin-left: 15%; width: 900px; height: 500px;"></div>
                <div class="call-to-action">

                    <br>
                    <a href="#" class="btn btn-default btn-xl wow tada">Atualizar</a>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Entre em contato!</h2>
                        <hr class="primary">
                        <p>Tem alguma crítica, dúvida ou sugestão? Isso é ótimo! Nos envie um e-mail agora que iremos verificar o mais rápido possível!</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x wow bounceIn"></i>
                        <p>123-456-6789</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                        <p><a href="mailto:your-email@your-domain.com">contato@sadm.com.br</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/creative.js"></script>

    </body>

</html>
