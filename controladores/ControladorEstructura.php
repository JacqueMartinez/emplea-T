<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorEstructura
 *
 * @author Cesar
 */
class ControladorEstructura
{

    public function getHeader()
    {
        return '<!--Comienza header-->
         <head>
            <title>Emplea-T | Portal de ofertas y búsqueda de empleos</title>
            <link rel="icon" href="recursos/sitio/logo.png">
            <meta name="viewport" content="width = device-width, initial-scale = 1">
            <meta http-equiv="Content-Type" content="text / html;
            charset = utf-8" />
            <meta name="keywords" content="Empleos tehuacan, trabajos en tehuacan" />
            <script type="application/x-javascript">
                addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
                }, false);

                function hideURLbar() {
                window.scrollTo(0, 1);
                }
            </script>
            <link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css"/>
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!-- Custom Theme files -->
            <link href="css/style.css" rel="stylesheet" type="text/css"/>
            <link href="//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
            <!-- font-Awesome-->
            <link href="css/font-awesome.css" rel="stylesheet">
            <!-- font-Awesome-->
        </head>
        <!--Termina header-->';
    }

    public function getNavbar()
    {
        $contenidoNavbar = '<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>S
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="recursos/sitio/logo.png" alt=""/></a>
            </div>
            <!--/.navbar-header-->';
        if (!isset($_SESSION['usuario'])) {
            $contenidoNavbar .= '<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li><a href="" data-toggle="modal" data-target="#modalSesion">Iniciar sesión</a></li>
                        <li><a href="registro.php">Crear cuenta</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
                <div class="clearfix"> </div>
            </div>
            <!--/.container-->
        </nav>';
        } else {
            $contenidoNavbar .= '<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Hola ' . $_SESSION['nombre'] . '</a></li>
                        <li><a href="#">Ver ofertas</a></li>
                        <li><a href="publicar.php">Publicar oferta</a></li>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="../controladores/ControladorLogins.php?exit">Salir</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
                <div class="clearfix"> </div>
            </div>
            <!--/.container-->
        </nav>';
        }
        return $contenidoNavbar;
    }

    public function getFooter()
    {
        return '<!--Comienza footer-->
        <div class="footer">
            <div class="container">                
                <div class="col-md-4 grid_3 text-center">
                    
                    <img src="recursos/sitio/bit.png" alt="..." class="img-responsive margin-top">
                </div>
                <div class="col-md-4 grid_3 text-center">
                    
                    <img src="recursos/sitio/dev.png" alt="..." class="img-thumbnail margin-top">
                </div>
                <div class="col-md-4 grid_3 text-center">
                    
                    <img src = "recursos/sitio/logo_2015.png" alt="..." class="img-responsive margin-top">
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--Termina footer-->';
    }

}
