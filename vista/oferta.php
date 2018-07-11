<?php include_once '../controladores/ControladorEstructura.php';?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Emplea - T | Empleos en Tehuacán</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!----font-Awesome----->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!----font-Awesome----->
    </head>
    <body>
        <?php echo ControladorEstructura::getNavbar();?>
        <!--/.navbar-default-->
       
        <div class="container">
            <div class="single">
                <div class="form-container">
                    <div class="row col-md-9">
                    <h2>Vacante</h2>
                    <div  class="col-md-10 form-group col-md-offset-2">
                        
                    
                    <form action="../controladores/ControladorRegistro.php" action="POST">
                        <div class="row">
                            
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a> Tipo de trabajo</a>
                                </div>
                                <div>
                                    <h4 class="col-md-8 control-lable">Auxiliar de Almacen</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a>Empresa</a>
                                </div>
                                <div class="col-md-8">
                                    <h4>Cerveceria Moctezuma</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a>Salario</a>
                                </div>
                                <div class="col-md-8">
                                    <h4>$ 3,800 - $ 4,200 al mes</h4>
                                </div>
                                                          
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a>Descrición</a>
                                </div>
                                <div>
                                    <h4 class="col-md-8 control-lable" >Preparatoria terminada, experiencia de 1 año, buena actitud laboral</h4>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a>Lugar del trabajo</a>
                                </div>
                                <div>    
                                    <h4 class="col-md-8 control-lable">San Lorenzo Teotipilco</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <h4 class="col-md-12
                                    control-lable"></h4>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-actions col-md-12">
                                <div class="col-md-6" style="">
                                    <a href="ofertas.php" class="btn btn-default pull-left" data-toggle="" data-target="">Regresar</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-default pull-left" data-toggle="" data-target="">Postularme</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-10 control-lable">
                            <h2></h2>
                        </div>
                    </form>
                </div>
                </div>
                    <!--Segunda seccion -->
                <div class="col-md-3">
                    <div>
                        <div class="" >
                            <img src="images/empresa.gif" height="150">
                            
                        </div>
                        <div>
                            <a href="mi_empresa.php">Ver informacion de la empresa</a>
                        </div>
                    </div>
                </div>
                    <!-- Fin de la 2da seccion-->
              </div>
            </div>
        </div>
       <?php echo ControladorEstructura::getFooter();?>
        
        
    </body>
</html>