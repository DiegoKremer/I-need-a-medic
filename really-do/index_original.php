<?php
require "dao/CategoriaDAO.php";
require "dao/DoencaDAO.php";
require "dao/EstatisticaDAO.php";
require "dao/SintomaDAO.php";
?>

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>

        <!-- Gráfico do mapa Google Charts -->

        <script type="text/javascript">
            google.load("visualization", "1", {packages: ["geochart"]});
            google.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {

                var data = google.visualization.arrayToDataTable([
                    ['Country', 'Popularity'],
                    ['Germany', 200],
                    ['United States', 300],
                    ['Brazil', 400],
                    ['Canada', 500],
                    ['France', 600],
                    ['RU', 700]
                ]);

                var options = {};

                var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

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
                            <a class="page-scroll" href="#about">Sobre</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Sintomas</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Doenças</a>
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

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Quem é você?</h2>
                        <hr class="light">
                        <p class="text-faded">Forneça as suas informações básicas para que possamos iniciar!</p>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" placeholder="Digite seu nome" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Idade</span>
                            <input type="text" class="form-control" placeholder="Digite sua idade" aria-describedby="basic-addon1">
                        </div>



                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Quais os seus sintomas?</h2>
                        <hr class="primary">
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

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <h3>Ready to Ship</h3>
                            <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                            <h3>Up to Date</h3>
                            <p class="text-muted">We update dependencies to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <h3>Made with Love</h3>
                            <p class="text-muted">You have to make your websites with love these days!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="no-padding" id="portfolio">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <aside class="bg-dark">
            <div class="container text-center">
                <div id="regions_div" style="width: 900px; height: 500px;"></div>
                <div class="call-to-action">
                    <h2>Free Download at Start Bootstrap!</h2>

                    <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
                </div>
            </div>
        </aside>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Let's Get In Touch!</h2>
                        <hr class="primary">
                        <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x wow bounceIn"></i>
                        <p>123-456-6789</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                        <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
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
