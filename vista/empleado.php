<?php include_once '../controladores/ControladorEstructura.php';?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Emplea-T | Portal de ofertas y búsqueda de empleos</title>
        <link rel="icon" href="assets/img/BIT.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Empleos tehuacan, trabajos en tehuacan" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
            window.scrollTo(0, 1);
            }
        </script>
        <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!-- font-Awesome----->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- font-Awesome----->
    </head>
    <body>
        <?php echo ControladorEstructura::getNavbar(); ?>

        <div class="container">
            <div class="single">  
                <div class="form-container">
                    <h2 class="col-md-9 col-md-offset-1">Busco empleo</h2>
                    <div>
                        <div >
                            <form  class="col-md-8 col-md-offset-3">         
                                
                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label class="col-md-3 control-lable" >Direcciòn</label>
                                        <div class="col-md-9">
                                            <input type="text" path="direccion" name="direccion" class="form-control input-sm"/>
                                        </div>
                                    </div>
                                </div>                               

                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label class="col-md-3 control-lable" >Telefono</label>
                                        <div class="col-md-4">
                                            <input type="text" path="direccion" name="telefono" class="form-control input-sm"/>
                                        </div>
                                    </div>
                                </div>   
                                
                                <div class="row">
                                    <div class="form-group col-md-8">                                        
                                        <div class="col-md-12">
                                            <div class="widget_search">
                                                <div class="widget-content">
                                                    <span>Area</span>
                                                    <select class="form-control jb_1">
                                                        <option value="1">Administrativos</option>
                                                        <option value="2">Biología</option>
                                                        <option value="3">Comunicaciones</option>
                                                        <option value="4">Contabilidad</option>
                                                        <option value="5">Construcción</option>
                                                        <option value="6">Creatividad, Producción y Diseño Comercial</option>
                                                        <option value="7">Derecho y Leyes</option>
                                                        <option value="8">Educación</option>
                                                        <option value="9">Ingeniería</option>
                                                        <option value="10">Logística, Transportación y Distribución</option>
                                                        <option value="11">Manufactura, Producción y Operación</option>
                                                        <option value="12">Mercadotecnia, Publicidad y Relaciones Públicas</option>
                                                        <option value="13">Recursos Humanos</option>
                                                        <option value="14">Salud y Belleza</option>
                                                        <option value="15">Sector Salud</option>
                                                        <option value="16">Seguro y Reaseguro</option>
                                                        <option value="17">Tecnologías de la Información / Sistemas</option>
                                                        <option value="18">Turismo, Hospitalidad y Gastronomía</option>
                                                        <option value="19">Ventas </option>
                                                        <option value="20">Veterinaria / Zoología</option>
                                                    </select>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                

                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label class="col-md-3 control-lable">Agregar CV</label>
                                        <div class="col-md-9">
                                            <input type="file" name="curriculum">
                                        </div>                                                           
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <div class="form-actions floatRight" >
                                            <input value="Buscar" class="btn btn-primary btn-sm" type="submit">
                                        </div>
                                    </div> 
                                </div>                                                              
                                
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!--modal-->
        <div id="modalcategoria" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Area de trabajo</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-container">
                            <div class="form-group col-md-12">
                                <div class="col-md-12">
                                    <div class="widget_search">
                                        <div class="widget-content">
                                            <span>Area</span>
                                            <select class="form-control jb_1">
                                                <option value="1">Administrativos</option>
                                                <option value="2">Biología</option>
                                                <option value="3">Comunicaciones</option>
                                                <option value="4">Contabilidad</option>
                                                <option value="5">Construcción</option>
                                                <option value="6">Creatividad, Producción y Diseño Comercial</option>
                                                <option value="7">Derecho y Leyes</option>
                                                <option value="8">Educación</option>
                                                <option value="9">Ingeniería</option>
                                                <option value="10">Logística, Transportación y Distribución</option>
                                                <option value="11">Manufactura, Producción y Operación</option>
                                                <option value="12">Mercadotecnia, Publicidad y Relaciones Públicas</option>
                                                <option value="13">Recursos Humanos</option>
                                                <option value="14">Salud y Belleza</option>
                                                <option value="15">Sector Salud</option>
                                                <option value="16">Seguro y Reaseguro</option>
                                                <option value="17">Tecnologías de la Información / Sistemas</option>
                                                <option value="18">Turismo, Hospitalidad y Gastronomía</option>
                                                <option value="19">Ventas </option>
                                                <option value="20">Veterinaria / Zoología</option>
                                            </select>
                                            <span>Especialidad</span>
                                            <select class="form-control jb_1">
                                                <option value="-1">Selecciona una opción</option>
                                                <option value="358">Estilista</option>
                                                <option value="359">Instructor Deportivo</option>
                                                <option value="360">Manicurista</option>
                                                <option value="361">Masajista</option>
                                                <option value="363">Pedicurista</option>
                                                <option value="364">Spa</option>
                                                <option value="365">Terapeuta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-sm">Aceptar</button>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>

        </div>
        <!--/.modal fade-->                                

        <!--contenido-->
        <?php echo ControladorEstructura::getFooter(); ?>	
        <!--<div class="container">
          <div class="col-sm-2">
                      <ul class="f_list2">
                              <li><a href="jobs.html">Russia Jobs</a></li>
                              <li><a href="jobs.html">Australia Jobs</a></li>
                              <li><a href="jobs.html">Srilanka Jobs</a></li>
                              <li><a href="jobs.html">Poland Jobs</a></li>
                  </ul>
              </div>
              <div class="col-sm-2">
                      <ul class="f_list2">
                              <li><a href="jobs.html">New Zealand Jobs</a></li>
                              <li><a href="jobs.html">Pakistan Jobs</a></li>
                              <li><a href="jobs.html">Srilanka Jobs</a></li>
                              <li><a href="jobs.html">Irland Jobs</a></li>
                  </ul>
              </div>
              <div class="col-sm-2">
                      <ul class="f_list2">
                              <li><a href="jobs.html">Canada Jobs</a></li>
                              <li><a href="jobs.html">Germany Jobs</a></li>
                              <li><a href="jobs.html">China Jobs</a></li>
                              <li><a href="jobs.html">Nepal Jobs</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 footer_text">
             <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
              </div>
              <div class="clearfix"> </div>
              <div class="copy">
                      <p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
              </div>
        </div>-->
    </div>
</body>
</html>


